<?php

namespace App\Util;

use App\Model\Datos;

class Util
{
    public static function mostrarDatos($fecha = null, $asunto = null)
    {
        $query = Datos::select(
            'id',
            'fecha',
            'asunto',
            'texto',
        );

        // Filtrar por Fechas
        if (!empty($fecha) && !empty($fecha)) {
            $query->whereDate('fecha', '>=', $fecha)
                ->whereDate('fecha', '<=', $fecha);
        }

        //Filtrar por asunto
        if (!empty($asunto)) {
            $query->where('asunto','LIKE', '%' . $asunto . '%');
        }

        $data =  $query->get();
        return $data;
    }
}
