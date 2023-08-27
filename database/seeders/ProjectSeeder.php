<?php

namespace Database\Seeders;

use App\Models\Admin\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 100 ; $i++) { 
            $newPost = new Project();
            $newPost->title = ucfirst($faker->unique()->words(4,true));
            $newPost->content = $faker->paragraph(10,true);
            $newPost->slug = $faker->slug();
            $newPost->image = $faker->imageUrl();
            $newPost->save();
        }
    }
}
