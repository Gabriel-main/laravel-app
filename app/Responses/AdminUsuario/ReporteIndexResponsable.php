<?php

namespace App\Responses\AdminUsuario;

use Illuminate\Contracts\Support\Responsable;


class ReporteIndexResponsable implements Responsable
{
    public function toResponse($request)
    {
        return view('AdminUsuario.reporte');
    }
}
