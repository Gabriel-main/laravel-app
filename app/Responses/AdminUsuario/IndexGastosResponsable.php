<?php

namespace App\Responses\AdminUsuario;

use Illuminate\Contracts\Support\Responsable;


class IndexGastosResponsable implements Responsable{
    public function toResponse($request)
    {
        return view('AdminUsuario.IndexGastos');
    }
}
