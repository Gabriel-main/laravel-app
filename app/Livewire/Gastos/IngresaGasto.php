<?php

namespace App\Livewire\Gastos;

use Livewire\Component;

class IngresaGasto extends Component
{
    public $showModal = false;

    public function abrir()
    {
        $this->showModal = true;
    }

    public function cerrar()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.gastos.ingresa-gasto');
    }
}
