<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('party')->insert([
            'party_id' => 3,
            'party' => '公明党',
            'image' => 'a'
        ]);
    }
}
