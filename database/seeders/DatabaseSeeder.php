<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RelasiSeeder::class);
        //tampilkan info
        $this->command->info('SeederRelasi berhasil');
    }
}
