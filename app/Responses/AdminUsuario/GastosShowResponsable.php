<?php

namespace App\Responses\AdminUsuario;

use Illuminate\Contracts\Support\Responsable;


class GastosShowResponsable implements Responsable
{
    public function toResponse($request)
    {
        return view('AdminUsuario.gastos');
    }
}
