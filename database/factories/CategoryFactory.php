<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */


class CategoryFactory extends Factory
{
    public function definition(): array
    {
        // Use fallback name if not overridden
        $name = $this->faker->word;

        return [
            'name' => $name,
            'slug' => Str::slug($name) . '-' . Str::random(5),
        ];
    }

    public function withName(string $name): static
    {
        return $this->state([
            'name' => $name,
            'slug' => Str::slug($name) . '-' . Str::random(5),
        ]);
    }
}
