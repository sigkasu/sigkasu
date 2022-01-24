<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class Home1Controller extends Controller
{
    public function index(Request $request)
    {
        $people_items = DB::table('users')->get();
        $party_items = DB::select('select * from party');

        $search1 = $request->input('selection');
        $search2 = $request->input('name');
        
        if ($search1 != null && $search1 != ('指定なし')) {
            $people_items = DB::table('users')->where('users.selection', $search1)->get();
        }

        if ($request->has('name') && $search2 != '') {
            $people_items = DB::table('users')->where('users.name', 'like', '%'.$search2.'%')->get();
        }

        // print_r("ゴミ");
        // print_r($search1);
        // print_r($search2);
        
        return view('home1')->with([
            'people_items' => $people_items,
            'party_items' => $party_items,
            'selection' => $search1
        ]);
    }
}