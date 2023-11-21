<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numberOfTodos = 5;
        for ($i =1; $i <= $numberOfTodos; $i++)
        {
            DB::table('todos')->insert([
                'name' => "Sample Todo $i",
                'description' => "This is a seeded description for sample Todo $i.",
                'created_at' =>now(),
                'updated_at'=> now(),
            ]);
        }
    }
}
