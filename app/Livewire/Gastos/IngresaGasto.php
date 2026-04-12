<?php

namespace App\Livewire\Gastos;

use Livewire\Component;
use App\Services\Categoria\CategoriaServices;
use Illuminate\Support\Facades\Auth;

class IngresaGasto extends Component
{
    protected CategoriaServices $services;
    public function boot(CategoriaServices $services)
    {
        $this->services = $services;
    }
    public $showModal = false;

    // Propiedades de la Categoría
    public $categoria_id;
    public $creandoNuevaCategoria = false;
    public $nuevaCategoriaNombre = '';

    public function abrir()
    {
        $this->showModal = true;
    }

    public function cerrar()
    {
        $this->showModal = false;
    }


    public function guardarCategoria()
    {
        $this->validate(['nuevaCategoriaNombre' => 'required|min:3']);
        try {
            $nueva = $this->services->crearNuevaCategoria([
                'name' => $this->nuevaCategoriaNombre,
                'type' => 'expense'
            ]);

            // Feedback inmediato: Seleccionamos la nueva y cerramos el modo creación
            $this->categoria_id = $nueva->id;
            $this->creandoNuevaCategoria = false;
            $this->nuevaCategoriaNombre = '';

            // Opcional: enviar una notificación interna
            $this->dispatch('notify', [
                'message' => '¡Categoria guardado con éxito!',
                'type' => 'success'
            ]);
        } catch (\Exception $e) {
            $this->dispatch('notify', [
                'message' => 'Error: No se pudo guardar.',
                'type' => 'error'
            ]);
        }
    }

    public function guardar()
    {
        // 1. Validar según el estado

    }

    public function render()
    {
        return view('livewire.gastos.ingresa-gasto', [
            'categorias' => $this->services->obtenerCategoriasDelUsuario()
        ]);
    }
}
