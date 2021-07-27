<?php

namespace Database\Factories;

use App\Models\ListingTag;
use Illuminate\Database\Eloquent\Factories\Factory;

class ListingTagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ListingTag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->word
        ];
    }
}
