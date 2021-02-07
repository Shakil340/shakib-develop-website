<?php

namespace Database\Seeders;

use App\Models\ColorCorrection;
use App\Models\ImageRetouching;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ColorCorrectionTableSeeder extends Seeder
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
            ColorCorrection::create([
                'img1'=>$faker->imageUrl(),
                'img2'=>$faker->imageUrl(),
                'img3'=>$faker->imageUrl(),
                'img4'=>$faker->imageUrl(),
                'status'=>rand(0,1)
            ]);
        }
    }
}
