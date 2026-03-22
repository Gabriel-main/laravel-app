<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Responses\web\IndexWebResponsable;

class IndexController extends Controller
{
    public function index(IndexWebResponsable $responsable): IndexWebResponsable{
        return $responsable;
    }
}
