<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Responses\web\DescripcionWebResponsable;

class DescripcionController extends Controller
{
    public function index(DescripcionWebResponsable $responsable): DescripcionWebResponsable{
        return $responsable;
    }
}
