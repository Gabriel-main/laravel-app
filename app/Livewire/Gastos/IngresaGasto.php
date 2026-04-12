<?php

namespace App\Livewire\Gastos;

use Livewire\Component;

class IngresaGasto extends Component
{
<<<<<<< HEAD
=======
    public $showModal = false;

    public function abrir()
    {
        $this->showModal = true;
    }

    public function cerrar()
    {
        $this->showModal = false;
    }

>>>>>>> 1ac3cc7480499b0c209c6c40257516068ebbab76
    public function render()
    {
        return view('livewire.gastos.ingresa-gasto');
    }
}
