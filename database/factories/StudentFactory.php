<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create();
        return [
            'fullname' => $faker->name(),
            'gender' => Arr::random(['L', 'P']),
            'nis' => mt_rand(00000001, 99999999),
            'class_id' => Arr::random([1, 2, 3, 4]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
