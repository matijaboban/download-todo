<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ConfigurationsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(RequestsSeeder::class);
    }
}
