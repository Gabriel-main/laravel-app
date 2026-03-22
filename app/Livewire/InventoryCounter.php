<?php

namespace App\Livewire;

use Livewire\Component;

class InventoryCounter extends Component
{
    public $stock = 0;

    public function decrement(){

        if($this->stock > 0){
            return $this->stock -= 1;
        }

        
    }

    public function increment(){
        return $this->stock += 1;
    }
    public function render()
    {
        return view('livewire.inventory-counter');
    }
}
