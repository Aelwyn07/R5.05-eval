<?php

namespace Database\Factories;

use Database\Samples\CategorieSamples;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Track>
 */
class CategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Between yesterday and ~6 previous weeks
        $published_at = now()->subDays(rand(1, 80));

        return [
            'categorie' => fake()->name(),
        ];
    }


    public function sample()
    {
        return $this->state(function (array $attributes) {
            return app(CategorieSamples::class)->collect()->random();
        });
    }
}
