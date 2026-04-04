<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responses\AdminUsuario\PresupuestoIndexResponsable;

class PresupuestoController extends Controller
{
    public function index(PresupuestoIndexResponsable $response): PresupuestoIndexResponsable
    {
        return $response;
    }
}
