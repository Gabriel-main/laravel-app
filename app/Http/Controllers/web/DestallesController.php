<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Responses\web\DestallesWebResponsable;

class DestallesController extends Controller
{
    public function index(DestallesWebResponsable $responsable): DestallesWebResponsable{
        return $responsable;
    }
}
