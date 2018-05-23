<?php

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
        $this->call([
            ServiceTableSeeder::class,
            ServiceDetailTableSeeder::class,
            DesignerTableSeeder::class,
            WorkTableSeeder::class,
            DemandTableSeeder::class,
            WorkAssessmentSeeder::class,
            UserTableSeeder::class,
            PostTableSeeder::class,
            ]);
    }
}
