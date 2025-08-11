<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    return [
        'titulo' => $this->faker->sentence(),
        'contenido' => $this->faker->paragraphs(3, true),
        'imagen_url' => $this->faker->imageUrl(640, 480, 'posts', true),
        'estado' => $this->faker->randomElement(['borrador', 'publicado']),
        'fecha_publicacion' => $this->faker->optional()->dateTimeBetween('-1 month', 'now'),
    ];
    }
}
