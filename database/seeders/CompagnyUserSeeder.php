<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Compagny;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompagnyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('compagny_user')->delete();

        $users = User::all();
        foreach ($users as $key => $user) {

            for ($i=1; $i < rand(1,4) ; $i++) { 
                
                DB::table('compagny_user')->insert(array(
                    array(
                        'user_id' => $user->id,
                        'compagny_id' => $i,
                        'created_at' => '2017-11-21 16:07:22',
                        'updated_at' => '2018-09-22 23:34:02',
                    ),
                ));
            }
            

        }

    }
}
