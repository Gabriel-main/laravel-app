<?php

namespace App\Responses\web;

use Illuminate\Contracts\Support\Responsable;


class DestallesWebResponsable implements Responsable{
    public function toResponse($request)
    {
        return view('web.destalles');
    }
}