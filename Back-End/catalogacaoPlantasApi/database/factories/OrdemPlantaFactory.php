<?php

namespace Database\Factories;

use App\Models\OrdemPlanta;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdemPlantaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrdemPlanta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'descricao' => $this->faker->sentence,
        ];
    }
}
