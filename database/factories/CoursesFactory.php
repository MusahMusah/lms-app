<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CoursesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'course_title'  => $this->faker->sentence,
            'course_code'   => $this->faker->unique()->numberBetween(1000, 9999),
            'course_description' => $this->faker->paragraph,
            'course_image'  => $this->faker->imageUrl(400, 300, 'cats'),
            'course_file'   => $this->faker->imageUrl(400, 300, 'cats'),
            'department_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
