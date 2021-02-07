<?php

namespace Database\Seeders;

use App\Models\ImageRetouching;
use App\Models\RasterToVector;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RasterToVectorTableSeeder extends Seeder
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
            RasterToVector::create([
                'img1'=>$faker->imageUrl(),
                'img2'=>$faker->imageUrl(),
                'img3'=>$faker->imageUrl(),
                'img4'=>$faker->imageUrl(),
                'status'=>rand(0,1)
            ]);
        }
    }
}
