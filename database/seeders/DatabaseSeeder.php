<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use App\Models\Tag;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

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
        Storage::deleteDirectory('posts');
        Storage::makeDirectory('posts');

        $this->call(RoleSeeder::class);

        $this->call(UserSeeder::class);

        Category::factory(4)->create();
        Tag::factory(8)->create();

        $this->call(PostSeeder::class);

        Comment::factory(100)->create();
        Reply::factory(100)->create();
    }
}
