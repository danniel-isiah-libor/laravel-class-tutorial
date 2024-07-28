<?php

namespace Database\Seeders;

use App\Models\WorkExperiencesModel;
//use Database\Factories\WorkExperiencesModelFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkExperiencesModel::factory()  
        -> count(5)
        -> create();
    }
}
