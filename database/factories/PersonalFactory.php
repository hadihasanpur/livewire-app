<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dep_id' => Department::factory(),
            'first_name' => $this->faker->firstname(),
            'last_name' => $this->faker->lastname(),
            'gender' => $this->faker->name(),
            'birth_year' => $this->faker->year(),
            'title' => $this->faker->title(),
            'from_date' => $this->faker->date(),
            'mobile' => $this->faker->phoneNumber(),
            'tell1' => $this->faker->phoneNumber(),
            'tell2' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
        ];
    }
}
