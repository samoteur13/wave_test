<?php

namespace Database\Seeders;

use App\Models\Agency;
use App\Models\Compagny;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $compagnies = Compagny::all();

        foreach ($compagnies as $key => $campagny) {
            Agency::factory()
                ->state([
                    'compagny_id' => $campagny->id
                ])
                ->count(4)
                ->create();
        }

    }
}
