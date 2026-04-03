<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Responses\AdminUsuario\GastosShowResponsable;

class GastosController extends Controller
{
    public function index(GastosShowResponsable $responsable): GastosShowResponsable
    {
        return $responsable;
    }
}
