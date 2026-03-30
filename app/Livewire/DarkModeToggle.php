<?php

namespace App\Livewire;

use Livewire\Component;

class DarkModeToggle extends Component
{
    public $darkMode = false;

    public function mount()
    {
        // Podrías cargar la preferencia desde la sesión o DB
        $this->darkMode = session('dark_mode', false);
    }

    public function toggle()
    {
        $this->darkMode = !$this->darkMode;
        session(['dark_mode' => $this->darkMode]);
        
        // Emitimos un evento para que el navegador reaccione
        $this->dispatch('dark-mode-toggled', darkMode: $this->darkMode);
    }

    public function render()
    {
        return view('livewire.dark-mode-toggle');
    }
}
