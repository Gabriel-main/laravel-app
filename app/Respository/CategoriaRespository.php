<?php

namespace App\Respository;

use App\Models\Categoria;

class CategoriaRespository
{
    public function __construct(protected Categoria $model)
    {
        $this->model = $model;
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function findByUserId(int $id)
    {
        return $this->model
            ::where("user_id", $id)
            ->orderBy("name", "asc")
            ->get();
    }
}
