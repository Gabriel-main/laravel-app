<?php

namespace App\Responses\AdminUsuario;

use Illuminate\Contracts\Support\Responsable;


class PresupuestoIndexResponsable implements Responsable
{
    public function toResponse($request)
    {
        return view('AdminUsuario.presupuestos');
    }
}
