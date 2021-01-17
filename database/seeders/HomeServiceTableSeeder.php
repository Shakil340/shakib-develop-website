<?php

namespace Database\Seeders;

use App\Models\HomeServiec;
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
            HomeServiec::create([
                'main_title'=>$faker->sentence,
                'main_sub_title'=>$faker->sentence,
                'title'=>$faker->sentence,
                'content'=>$faker->paragraph,
                'thumbnail'=>$faker->imageUrl($width = 383, $height = 240),
                'status'=>rand(0,1)
            ]);
        }
    }
}
