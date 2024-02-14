<?php

namespace Database\Seeders;

use App\Models\vouture;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoutureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        vouture::factory()->count(10)->create();
    }
}
