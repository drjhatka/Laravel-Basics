<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(UsersTableSeeder::class,1);
        factory(Post::class, 10)->create()->each(function($post){
            $post->user()->associate(factory(App\User::class)->create());
        });
    }
}
