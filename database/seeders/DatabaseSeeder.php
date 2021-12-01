<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\GovernmentSeeder;

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
        $this->call(GovernmentSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(OfficerSeeder::class);
        $this->call(TaskSeeder::class);
        $this->call(SubtaskSeeder::class);
    }
}
