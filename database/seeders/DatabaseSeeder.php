<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
           SliderTabelSeeder::class,
            UserTableSeeder::class,
            HomeServiceTableSeeder::class,
            SubjectTableSeeder::class,
            CategoryTableSeeder::class,
            AdminTableSeeder::class,
            ServiceTableSeeder::class,
            RecentWorkTableSeeder::class,
            ExpertTableSeeder::class,
            ProtfolliowTableSeeder::class,
            ImageRetouchingTableSeeder::class,
            BackgroundRemoveTableSeeder::class,
            PhotoResizingTableSeeder::class,
            ColorCorrectionTableSeeder::class,
            LogoDesignTableSeeder::class,
            RasterToVectorTableSeeder::class


        ]);
    }
}
