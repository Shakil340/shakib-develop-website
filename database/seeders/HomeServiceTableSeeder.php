<?php

namespace Database\Seeders;

use App\Models\HomeService;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class HomeServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            HomeService::create([
                'title'=>$faker->sentence,
                'content'=>$faker->paragraph,
                'url'=>$faker->url,
                'thumbnail'=>$faker->imageUrl($width = 383, $height = 240),
                'status'=>rand(0,1)
            ]);
        }
    }
}
