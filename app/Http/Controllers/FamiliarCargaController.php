<?php

namespace App\Http\Controllers;

use App\Models\FamiliarCarga;
use App\Http\Requests\UpdateFamiliarCargaRequest;
use Illuminate\Http\Request;

class FamiliarCargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cargasFamiliares = FamiliarCarga::all();
        return view('cargasfamiliares.index', compact('cargasFamiliares'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        return view('cargasfamiliares.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

         $request->validate([
            'carga_nombre' => 'required',
            ]);
            /*
            'carga_rut' =>  'required',
            'beneficiario_nombre' => 'required',
            'beneficiario_rut' =>   'required',
            'direccion' =>   'required',
            'cod_causal_crearCargaFamiliar' => 'required',
       */
      FamiliarCarga::create([

            'carga_nombre' => $request->carga_nombre,
            ]);
            /*
            'carga_rut' => $request->carga_rut,
            'beneficiario_nombre' => $request->beneficiario_nombre,
            'beneficiario_rut' => $request->beneficiario_rut,
            'direccion' => $request->direccion,
            'cod_causal_crearCargaFamiliar' => $request->cod_causal_crearCargaFamiliar
            */
            

    
            return back()
                ->with([
                    'error'=> 'Error: el familiar no pudo ser ingresado',
                    'success'=> 'Suceso: el familiar pudo ser ingresado',
                    'cargar_nombre'=>'Error: en el nombre ingresado', 
                ]);
        }
    

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        return view('cargasfamiliares.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FamiliarCarga $familiarCarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFamiliarCargaRequest $request, FamiliarCarga $familiarCarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FamiliarCarga $familiarCarga)
    {
        //
    }
}
