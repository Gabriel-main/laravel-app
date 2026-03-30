<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class MenuMobile extends Component
{
    public $isOpen = false;
    public $isClosing = false;

    public function openMenu()
    {
        $this->isOpen = true;
        $this->isClosing = false;
    }

    public function closeMenu()
    {
        // 1. Activamos la clase CSS de salida
        $this->isClosing = true;
        
        // 2. Le avisamos a nuestro script de la vista que empiece a contar
        $this->dispatch('start-closing-timer');
    }

    // 3. Este evento lo llama JavaScript cuando pasan los 300ms
    #[On('finish-closing')]
    public function finalClose()
    {
        $this->isOpen = false;
        $this->isClosing = false;
    }

    public function render()
    {
        return view('livewire.menu-mobile');
    }
}