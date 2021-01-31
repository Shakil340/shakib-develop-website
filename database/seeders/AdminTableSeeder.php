<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt(123456)
        ]);
    }
}
