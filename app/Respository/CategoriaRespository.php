<?php

namespace App\Respository;

use App\Models\categoria;

class CategoriaRespository
{
    public function __construct(protected categoria $model)
    {
        $this->model = $model;
    }
}
