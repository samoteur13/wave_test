<?php

namespace Database\Seeders;

use App\Models\Campagny;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampagnySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campagny::factory()->count(4)->create();
    }
}
