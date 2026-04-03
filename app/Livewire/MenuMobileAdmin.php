<?php

namespace App\Livewire;

use App\Livewire\Actions\Logout;
use Livewire\Component;
use Livewire\Attributes\On;

class MenuMobileAdmin extends Component
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
        $this->isClosing = true;
        // Enviamos el evento para que JS espere la animación
        $this->dispatch('close-mobile-menu');
    }

    // Escuchamos el evento que manda JS cuando termina el tiempo
    #[On('finish-closing-menu')]
    public function finalClose()
    {
        $this->isOpen = false;
        $this->isClosing = false;
    }

    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }

    public function render()
    {
        return view('livewire.menu-mobile-admin');
    }
}
