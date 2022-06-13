<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'description' => $this->faker->text($maxNbChars = 500),
            'cep' => $this->faker->unique(true)->numberBetween(10000000, 99999999),
            'street' => $this->faker->

        ];
    }
}

$table->string('name', 200);
$table->string('description', 500);
$table->integer('cep');
$table->string('street', 200);
$table->integer('number');
$table->string('neighbourhood', 200);
$table->string('state', 200);
$table->string('city', 200);