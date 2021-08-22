<?php

namespace Database\Factories;

use App\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Listing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $lowPrice = $this->faker->randomNumber(6);

        $title = $this->faker->sentence();
        return [
            "title" => $title,
            "slug" => str_replace(" ", "-", $title),
            "details" => $this->faker->paragraph(5, true),
            "address" => $this->faker->address,
            "lat" => $this->faker->latitude(-6.2, -6.3),
            "long" => $this->faker->longitude(106.8, 106.9),
            "low_price" => $lowPrice,
            "high_price" => $this->faker->numberBetween($lowPrice, $lowPrice + 1000000),
            'category_id' => $this->faker->numberBetween(1, 6),
            'top_destination' => random_int(0, 1) > 0,
            'phone_number' => $this->faker->e164PhoneNumber,
            'website' => $this->faker->url,
            'is_active' => random_int(0, 1) > 0,
        ];
    }
}
