<?php

namespace App\Http\Controllers;

use App\Models\Pia;
use Illuminate\Http\Request;

class PiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return("Visualización esperada de PIAS");
    }


    public function login()
    {
            $request->validate([
                'codigo_entidad' => 'required',
                'login_usuario' => 'required',
                'clave_usuario' => 'required',
            ]);
    
            $codigoEntidad = $request->codigo_entidad;
            $loginUsuario = $request->login_usuario;
            $claveUsuario = $request->clave_usuario;
    
            $soapRequest = <<<XML
    <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ws="http://ws.pias.suseso.cl/">
       <soapenv:Header/>
       <soapenv:Body>
          <ws:login>
             <ws:CodigoEntidad>$codigoEntidad</ws:CodigoEntidad>
             <ws:LoginUsuario>$loginUsuario</ws:LoginUsuario>
             <ws:ClaveUsuario>$claveUsuario</ws:ClaveUsuario>
          </ws:login>
       </soapenv:Body>
    </soapenv:Envelope>
    XML;
    
            try {
                // Reemplaza con la URL real del servicio SOAP
                $response = Http::withHeaders([
                    'Content-Type' => 'text/xml; charset=UTF-8',
                    'SOAPAction' => 'http://ws.pias.suseso.cl/login'
                ])->send('POST', 'URL_DEL_SERVICIO_SOAP_AQUI', [
                    'body' => $soapRequest
                ]);
    
                // Procesar la respuesta SOAP aquí
                $xmlResponse = simplexml_load_string($response->body());
                
                // Aquí deberías verificar la respuesta real del servicio
                // Este es solo un ejemplo básico
                if ($response->successful()) {
                    return back()->with('success', 'Login exitoso');
                } else {
                    return back()->with('error', 'Credenciales incorrectas');
                }
    
            } catch (\Exception $e) {
                return back()->with('error', 'Error al conectar con el servicio: ' . $e->getMessage());
            }
        
    

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Pia $pia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pia $pia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pia $pia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pia $pia)
    {
        //
    }
}
