<?php

use Illuminate\Database\Seeder;
Use App\Image;
use Faker\Generator as Faker;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 8; $i++) {
          $new_image = new Image();
          $new_image->url= $faker->imageUrl();
          $new_image->save();
        }
    }
}
