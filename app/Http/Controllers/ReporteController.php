<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responses\AdminUsuario\ReporteIndexResponsable;

class ReporteController extends Controller
{
    public function index(ReporteIndexResponsable $response): ReporteIndexResponsable
    {
        return $response;
    }
}
