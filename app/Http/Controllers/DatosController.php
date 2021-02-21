<?php

namespace App\Http\Controllers;

use App\Mail\NuevoDato;
use App\Model\Datos;
use App\Util\Util;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DatosController extends Controller
{
    //

    public function home() {
        return view('home');
    }



    public function mostrarDatos(Request $request){

        if ($request->ajax()) {

            $fecha =  $request->get('fecha');
            $asunto = $request->get('asunto');

            $resultados = Util::mostrarDatos($fecha, $asunto);

            $output = '';
            foreach ($resultados as  $resultado) {

                $output .= '<tr>' .
                    '<td class="text-center">' . $resultado->id . '</td>' .
                    '<td class="text-center">' . $resultado->fecha . '</td>' .
                    '<td class="text-center">' . $resultado->asunto . '</td>' .
                    '<td class="text-center">' . $resultado->texto . '</td>' .
                    '</tr>';
            }
            return $output;
        }
    }

    public function store(Request $request)
    {

        $campos = $request->all();
        
        //guardamos los datos
        $data = Datos::create($campos);

        //enviamo Email
        Mail::to(config('email.to.address'))
        ->send(new nuevoDato($data));


     return back();
    }
}
