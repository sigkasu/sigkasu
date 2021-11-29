<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home1Controller extends Controller
{
    public function index(Request $request)
    {
        $people_items = DB::select('select * from users');
        $party_items = DB::select('select * from party');
        return view('home1', ['people_items' => $people_items], ['party_items' => $party_items]);
    }
}
