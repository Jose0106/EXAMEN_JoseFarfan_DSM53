<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\post_tag;
use App\Models\tags;

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
        User::factory(50)->create();
        Category::factory(50)->create();
        Post::factory(50)->create();
        /*PostTag::factory(50)->create();*/
        Tags::factory(50)->create();
        Images::factory(50)->create();
    }
}
