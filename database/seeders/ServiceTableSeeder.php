<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\service;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index){
            service::create([
                'user_id'=>rand(1,10),
                'name'=>$faker->sentence,
                'status'=>rand(0,1)
            ]);
        }
    }
}
