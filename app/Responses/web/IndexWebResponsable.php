<?php

namespace App\Responses\web;

use Illuminate\Contracts\Support\Responsable;


class IndexWebResponsable implements Responsable{
    public function toResponse($request)
    {
        return view('web.index');
    }
}
