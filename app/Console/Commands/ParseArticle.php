<?php

namespace App\Console\Commands;

use App\Models\Blog;
use App\Models\Image;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class ParseArticle extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'article:parse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Parse XML Article from wordpress';

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
        $file = Storage::get('/article.json');
        $data = json_decode($file, true);

        // dd(array_keys($data['data']['posts'][30]));
        // dd($data['data']['posts'][30]['html']);

        $posts = $data['data']['posts'];

        $bar = $this->output->createProgressBar(count($posts));
        $bar->start();

        $images = [];
        foreach ($posts as $post) {
            if ($post['status'] != "published") continue;

            $content = $post['html'];

            $imageUrl = [];
            preg_match("/(http:\/\/candi.id\/wp-content\/uploads\/)[^\"]+/", $content, $imageUrl);
            $imageUrl = str_replace("http://candi.id", "http://old.candi.id", $imageUrl);
            $images[] = $imageUrl;
            $blog = Blog::create([
                "title" => $post['title'],
                "slug" => $post['slug'],
                "content" => $post['html'],
                "is_featured" => $post['featured']
            ]);

            Image::create([
                "model_id" => $blog->id,
                "model_name" => "App\Models\Blog",
                "image_url" => count($imageUrl) ? $imageUrl[0] : config('app.url') . "/images/demo-bg.jpg",
                "image_thumbnail" => count($imageUrl) ? $imageUrl[0] : config('app.url') . "/images/demo-bg.jpg",
                "metadata" => json_encode([]),
                "is_temporary" => false,
            ]);
            $bar->advance();
        }

        $bar->finish();

        $this->newLine();
        $this->info('Task Finished. Created : '. count($posts) . " Blogs");
        return 0;
    }
}
