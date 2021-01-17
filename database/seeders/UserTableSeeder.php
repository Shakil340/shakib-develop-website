<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->default();
        $faker =Faker::create();
        foreach (range(1,10) as $index){
            User::create([
                'name'=>$faker->name,
                'email'=>$faker->email,
                'password'=>bcrypt($faker->password)
            ]);
        }

    }

    public function default(){
        User::create([
            'name'=>'shakil',
            'email'=>'ashakil340@gmail.com',
            'password'=>bcrypt('12345678')
        ]);
    }
}
