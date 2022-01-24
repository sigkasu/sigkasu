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
        $param=[
            'id'=>'1',
            'party'=>'自由民主党',
            'image'=>'jimin.jpg',
            'url'=>'https://www.jimin.jp',

        ]; DB::table('party')->insert($param);
        $param=[
            'id'=>'2',
            'party'=>'立憲民主党',
            'image'=>'rikken.jpg',
            'url'=>'https://www.cdp-japan.jp',

        ];  DB::table('party')->insert($param);
        $param=[
            'id'=>'3',
            'party'=>'公明党',
            'image'=>'komei.jpg',
            'url'=>'http://www.komei.or.jp',

        ];   DB::table('party')->insert($param);
        $param=[
            'id'=>'4',
            'party'=>'日本維新の会',
            'image'=>'ishin.jpg',
            'url'=>'http://www.o-ishin.jp/',

        ];   DB::table('party')->insert($param);
        $param=[
            'id'=>'5',
            'party'=>'国民民主党',
            'image'=>'kokumin.jpg',
            'url'=>'http://www.new-kokumin.jp',

        ];   DB::table('party')->insert($param);
        $param=[
            'id'=>'6',
            'party'=>'日本共産党',
            'image'=>'kyosan.jpg',
            'url'=>'http://www.jcp.or.jp',

        ]; DB::table('party')->insert($param);
        $param=[
            'id'=>'7',
            'party'=>'れいわ新選組',
            'image'=>'reiwa.jpg',
            'url'=>'http://www.reiwa-shinsengumi.com',

        ];  DB::table('party')->insert($param); 
        $param=[
            'id'=>'8',
            'party'=>'社会民主党',
            'image'=>'syakai.jpg',
            'url'=>'http://www.sdp.or.jp',

        ];  DB::table('party')->insert($param);
        $param=[
            'id'=>'9',
            'party'=>'NHKと裁判してる党弁護士法72条違反で',
            'image'=>'nhk.jpg',
            'url'=>'http://www.nhkkara.jp',

        ];
    }
}