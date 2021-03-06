<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // call the faculity seeder
        $this->call(FacultySeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(CoursesSeeder::class);
    }
}
