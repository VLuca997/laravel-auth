<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();
        for($i=0; $i < 10; $i++){
            $project = new Project();
            $project->name = fake()->words();
            $project->description = fake()->words();
            $project->framework = fake()->words();
            $project->creation_date = fake()->date();
            $project->save();

        };
    }
}
