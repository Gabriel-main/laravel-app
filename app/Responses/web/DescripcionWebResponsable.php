<?php

namespace App\Responses\web;

use Illuminate\Contracts\Support\Responsable;


class DescripcionWebResponsable implements Responsable{
    public function toResponse($request)
    {
        return view('web.descripcion');
    }
}