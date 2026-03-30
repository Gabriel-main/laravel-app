<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responses\AdminUsuario\IndexGastosResponsable;

class UsuarioController extends Controller
{
    public function index(IndexGastosResponsable $responsable): IndexGastosResponsable
    {
        return $responsable;
    }
}
