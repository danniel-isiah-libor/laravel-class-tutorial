<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\WorkExperiencesModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WorkExperiencesModelFactory extends Factory
{
    protected $model =  WorkExperiencesModel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=> User::factory(),
            'company' => fake()->company(),
            'from' => fake()->date(),
            'to' => fake()->date(),
            'position' => fake()->jobTitle(),


        ];
    }
}
