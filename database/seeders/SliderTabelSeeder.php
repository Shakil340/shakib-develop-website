<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class SliderTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,10)as $index){
            Slider::create([
                'img1'=>$faker->imageUrl($width = 1240, $height = 600),
                'img2'=>$faker->imageUrl($width = 1240, $height = 600),
                'img3'=>$faker->imageUrl($width = 1240, $height = 600),
                'img4'=>$faker->imageUrl($width = 1240, $height = 600),
                'img5'=>$faker->imageUrl($width = 1240, $height = 600),
                'status'=>rand(0,1)
            ]);
        }
    }
}
