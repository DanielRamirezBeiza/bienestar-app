<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PiasAuthController extends Controller
{
    public function showLogin()
    {
        return view('soap-login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'codigo_entidad' => 'required',
            'login_usuario' => 'required',
            'clave_usuario' => 'required',
        ]);

        $xmlRequest = $this->buildXmlRequest(
            $request->codigo_entidad,
            $request->login_usuario,
            $request->clave_usuario
        );

        try {
            $response = Http::withHeaders([
                'Content-Type' => 'text/xml; charset=UTF-8',
                'SOAPAction' => 'http://ws.pias.suseso.cl/login'
            ])->send('POST', 'https://servicio.suseso.cl/autenticacion', [
                'body' => $xmlRequest
            ]);

            $token = $this->extractTokenFromResponse($response->body());
            
            if ($token) {
                session(['soap_token' => $token]);
                return redirect('/dashboard')->with('success', 'Autenticación exitosa');
            }

            return back()->with('error', 'Credenciales incorrectas');

        } catch (\Exception $e) {
            return back()->with('error', 'Error en el servicio: ' . $e->getMessage());
        }
    }

    protected function buildXmlRequest($codigo, $usuario, $clave)
    {
        return <<<XML
<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ws="http://ws.pias.suseso.cl/">
   <soapenv:Header/>
   <soapenv:Body>
      <ws:login>
         <ws:CodigoEntidad>$codigo</ws:CodigoEntidad>
         <ws:LoginUsuario>$usuario</ws:LoginUsuario>
         <ws:ClaveUsuario>$clave</ws:ClaveUsuario>
      </ws:login>
   </soapenv:Body>
</soapenv:Envelope>
XML;
    }

    protected function extractTokenFromResponse($xmlResponse)
    {
        try {
            $xml = simplexml_load_string($xmlResponse);
            $ns = $xml->getNamespaces(true);
            $return = $xml->children($ns['ns1'])->return;
            
            $response = simplexml_load_string($return);
            if ((string)$response->Codigo === '0') {
                return (string)$response->Mensaje; // El token está en el mensaje
            }
            
            return null;
        } catch (\Exception $e) {
            return null;
        }
    }
}