<?php

namespace Database\Seeders;

use App\Models\RecentWork;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class RecentWorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,15) as $index){
            RecentWork::create([
               'title'=>$faker->sentence,
               'thumbnail'=>$faker->imageUrl($width = 255, $height = 255),
                'status'=>rand(0,1)
            ]);
        }
    }
}
