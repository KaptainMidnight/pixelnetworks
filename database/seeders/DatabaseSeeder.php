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
         \App\Models\User::factory(150)->create();
         \App\Models\Post::factory(300)->create();
         \App\Models\Comment::factory(500)->create();
    }
}
