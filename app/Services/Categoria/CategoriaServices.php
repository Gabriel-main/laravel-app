<?php

namespace App\Services\Categoria;

use App\Respository\CategoriaRespository;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class CategoriaServices
{
    public function __construct(protected CategoriaRespository $repository)
    {
        $this->repository = $repository;
    }

    public function crearNuevaCategoria($data)
    {
        $data['user_id'] = Auth::id();

        return $this->repository->create($data);
    }

    public function obtenerCategoriasDelUsuario(): Collection
    {
        $userId = Auth::id();


        return $this->repository->findByUserId($userId);
    }
}
