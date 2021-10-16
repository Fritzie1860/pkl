<?php

namespace Database\Factories;

use App\Models\projects;
use Illuminate\Database\Eloquent\Factories\Factory;

class projectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = projects::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pro_nama' => $this->faker->name(),
            'tanggal_mulai' => $this->faker->date(),
            'pro_status' => rand(0,2),
            'pro_update' => $this->faker->date()
        ];
    }
}
