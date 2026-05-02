<?php

namespace App\Livewire\Gastos;

use Livewire\Component;
use App\Services\Categoria\CategoriaServices;
use App\Livewire\Forms\CategoriaForm;

class IngresaGasto extends Component
{
    protected CategoriaServices $services;
    public CategoriaForm $categoriaForm;
    public function boot(CategoriaServices $services)
    {
        $this->services = $services;
    }
    public $showModal = false;

    // Propiedades de la Categoría
    public $categoria_id;
    public $creandoNuevaCategoria = false;
    public $nuevaCategoriaNombre = "";

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
        try {
            $nueva = $this->categoriaForm->store($this->services);

            // Feedback inmediato: Seleccionamos la nueva y cerramos el modo creación
            $this->categoria_id = $nueva->id;
            $this->creandoNuevaCategoria = false;
            $this->nuevaCategoriaNombre = "";

            // Opcional: enviar una notificación interna
            $this->dispatch(
                "notify",
                message: "¡Categoría guardada con éxito!",
                type: "success",
            );
        } catch (\Exception $e) {
            $this->dispatch(
                "notify",
                message: "Error: " . $e->getMessage(),
                type: "error",
            );
        }
    }
    public function updated($propertyName)
    {
        // Si lo que cambió empieza por 'categoriaForm.'
        if (str_starts_with($propertyName, "categoriaForm.")) {
            // Obtenemos solo el nombre del campo (ej. 'name')
            $fieldName = str_replace("categoriaForm.", "", $propertyName);

            // Le pedimos al form que valide ese campo específico
            $this->categoriaForm->validateField($fieldName);
        }
    }

    public function guardar()
    {
        // 1. Validar según el estado
    }

    public function render()
    {
        return view("livewire.gastos.ingresa-gasto", [
            "categorias" => $this->services->obtenerCategoriasDelUsuario(
                "expense",
            ),
        ]);
    }
}
