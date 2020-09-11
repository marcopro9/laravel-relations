<?php

use Illuminate\Database\Seeder;
Use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 8; $i++) {
        $new_post = new Post();
        $new_post->user_id= rand(1,10);
        $new_post->image_id= $i + 1;
        $new_post->title= $faker->sentence();
        $new_post->content= $faker->text(300);
        $new_post->save();
      }
    }
}
