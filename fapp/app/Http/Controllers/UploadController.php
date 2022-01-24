<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
   public function store(Request $request) {
        $image = $request->image->store('image');
   }  
}
