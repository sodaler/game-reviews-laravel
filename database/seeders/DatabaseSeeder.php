<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\CategoryFactory;
use Database\Factories\PostFactory;
use Database\Factories\PostTagFactory;
use Database\Factories\TagFactory;
use Database\Factories\UserFactory;
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
        UserFactory::new()->count(10)->create();
        CategoryFactory::new()->count(1)->create();
        TagFactory::new()->count(10)->create();
        PostFactory::new()->count(20)->create();
        PostTagFactory::new()->count(20)->create();
    }
}
