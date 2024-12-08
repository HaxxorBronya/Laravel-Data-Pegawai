<?php

namespace Database\Factories;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * 
     * @return array 
     */

     protected $model = Employee::class;
    public function definition()
    {
        // $factory->define(Employee::class, function (Faker $faker)
        {
            return [
                'name' => $this->faker->name,
                'position' => $this->faker->jobTitle,
                'email' => $this->faker->unique()->safeEmail,
                'hire_date' => $this->faker->date,
            ];
        };
    }
    
}



