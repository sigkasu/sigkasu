<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class Home1Controller extends Controller
{
    public function index(Request $request)
    {
        $id = auth::id();
        $people_items = DB::select('select * from users');
        $party_items = DB::select('select * from party');
        print_r($id);
        return view('home1')->with([
            'people_items' => $people_items,
            'party_items' => $party_items,
        ]);
    }
}