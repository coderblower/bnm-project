<?php

namespace Database\Seeders;

use App\Models\vouture_single;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vouture_singleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        vouture_single::factory()->count(5)->create();
    }
}
