<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this -> call ([AgeGroupTableSeeder::class]);
        $this -> call ([CategorySlotTableSeeder::class]);
        $this -> call ([PreacherTableSeeder::class]);
        $this -> call ([TimeslotTableSeeder::class]);
    }
}
