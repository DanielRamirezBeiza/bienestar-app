<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    //
    public function store(Request $request)
    {
       $input -> $request->all();
       return response()->json($input);
    }
}
