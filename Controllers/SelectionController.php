<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectionController extends Controller
{
    public function index(Request $request)
    {
        $selection_items = DB::select('select * from selection');
        return view('selection', ['selection_items' => $selection_items]);
    }
}
