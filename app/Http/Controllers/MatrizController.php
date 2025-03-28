<?php

namespace App\Http\Controllers;

use App\Models\Matriz;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateMatrizRequest;
use App\Imports\MatrizImport;
use Maatwebsite\Excel\Facades\Excel;

class MatrizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
      
        
        
           $file = $request->file('import_file');
           Excel::import(new MatrizImport, $file);
           return redirect()->route('test-home')->with('success', 'Actualización correcta');
            
           }

    /**
     * Display the specified resource.
     */
    public function show(Matriz $matriz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matriz $matriz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMatrizRequest $request, Matriz $matriz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matriz $matriz)
    {
        //
    }
}
