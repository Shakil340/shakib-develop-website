<?php

namespace Database\Seeders;


use App\Models\PhotoResizing;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PhotoResizingTableSeeder extends Seeder
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
            PhotoResizing::create([
                'img1'=>$faker->imageUrl(),
                'img2'=>$faker->imageUrl(),
                'img3'=>$faker->imageUrl(),
                'img4'=>$faker->imageUrl(),
                'status'=>rand(0,1)
            ]);
        }
    }
}
