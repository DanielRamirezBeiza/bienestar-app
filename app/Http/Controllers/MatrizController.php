<?php

namespace App\Http\Controllers;

use App\Models\Matriz;
use Illuminate\Http\Request;
use App\Imports\MatrizImport;
use App\Models\MatrizCargasCas;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\MatrizCargasBienestar;
use App\Imports\MatrizCargasCasImport;
use App\Http\Requests\UpdateMatrizRequest;
use App\Imports\MatrizCargasBienestarImport;

class MatrizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.matrices');
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

    public function storeCargasBienestar(Request $request)
    {
        //
           $file = $request->file('import_file_proexsy');
           MatrizCargasBienestar::truncate(); //borrar datos anteriores del modelo
           Excel::import(new MatrizCargasBienestarImport, $file);
           return redirect()->route('test-home')->with('success', 'Actualización correcta');
    }

    public function storeCargasCas(Request $request)
    {
        //
           $file = $request->file('import_file_cas');
           MatrizCargasCas::truncate(); //borrar datos anteriores del modelo
           Excel::import(new MatrizCargasCasImport, $file);
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
