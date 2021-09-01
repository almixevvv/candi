<?php

namespace App\Console\Commands;

use Exception;
use App\Models\City;
use App\Models\District;
use App\Models\Province;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class GetAllProvinceData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'province:get {--provinces=} {--cities=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get all province, city and district from api calls';

    /**
     * Error List
     *
     * @var array
     */
    private array $errors = [];

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $options = $this->parseOptions();
        $baseUrl = "http://dev.farizdotid.com/api/daerahindonesia";

        try {
            $response = Http::retry(3, 500)->get($baseUrl . "/provinsi");
            $responseJson = $response->json();
        } catch (Exception $exception) {
            $this->error('Failed Getting Data. Type: '. get_class($exception) .' Error : '. $exception->getMessage());
        }

        foreach ($responseJson['provinsi'] as $data) {
            Province::updateOrCreate([
                "code" => $data['id'],
                "name" => $data['nama']
            ]);

            $this->info('Province created : ' . $data['nama']);
        }

        $provinces = Province::all();
        if ($options['provinces']) {
            $provinces = Province::whereIn('code', $options['provinces'])->get();
        }

        foreach ($provinces as $province) {
            try {
                $response = Http::retry(3, 500)->get($baseUrl . "/kota?id_provinsi=". $province->code);
                $responseJson = $response->json();
            } catch (Exception $exception) {
                $this->collectErrors('province', $province->code);
                $this->error('Failed Getting Data. Type: '. get_class($exception) .' Error : '. $exception->getMessage());
            }

            foreach ($responseJson['kota_kabupaten'] as $data) {
                City::updateOrCreate([
                    "code" => $data['id'],
                    "name" => $data['nama'],
                    "province_id" => $province->id
                ]);

                $this->info('City created : ' . $data['nama']);
            }
        }

        $cities = City::all();
        if ($options['cities']) {
            $cities = City::whereIn('code', $options['cities'])->get();
        }
        foreach ($cities as $city) {
            try {
                $response = Http::retry(3, 500)->get($baseUrl . "/kecamatan?id_kota=" . $city->code);
                $responseJson = $response->json();
            } catch (Exception $exception) {
                $this->collectErrors('city', $city->code);
                $this->error('Failed Getting Data. Type: '. get_class($exception) .' Error : '. $exception->getMessage());
            }

            foreach ($responseJson['kecamatan'] as $data) {
                District::updateOrCreate([
                    "code" => $data['id'],
                    "name" => $data['nama'],
                    "city_id" => $city->id
                ]);

                $this->info('District created : ' . $data['nama']);
            }
        }

        if (count($this->errors)) {
            $this->error("List of errors:\n". json_encode($this->errors));
        }

        return 0;
    }

    private function parseOptions() 
    {
        $options = [
            "provinces" => [],
            "cities" => [],
        ];

        if ($this->option('provinces')) {
            $options['provinces'] = Str::of($this->option('provinces'))->explode(',');
            $this->info("Province : ". $options['provinces']);
        }

        if ($this->option('cities')) {
            $options['cities'] = Str::of($this->option('cities'))->explode(',');
            $this->info("Cities : ". $options['cities']);
        }

        return $options;
    }

    private function collectErrors(string $type, string $code) 
    {
        $this->errors[$type][] = $code;
    }
}
