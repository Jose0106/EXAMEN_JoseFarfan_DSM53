<?php

namespace Database\Factories;

use App\Models\Reparacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReparacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reparacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'precio' => $this->faker->sentence,
        ];
    }
}
