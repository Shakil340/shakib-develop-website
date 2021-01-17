<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,3)as $index){
            Subject::create([
               'user_id'=>rand(1,10),
               'name'=>$faker->sentence,
               'status'=>rand(0,1)
            ]);
        }
    }
}
