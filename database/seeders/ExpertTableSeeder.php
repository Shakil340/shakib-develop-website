<?php

namespace Database\Seeders;


use App\Models\Expert;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ExpertTableSeeder extends Seeder
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
            Expert::create([
                'title'=>$faker->sentence,
                'subTitle'=>$faker->sentence,
                'status'=>rand(0,1)
            ]);
        }
    }
}
