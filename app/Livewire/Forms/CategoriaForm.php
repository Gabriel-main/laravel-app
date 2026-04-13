<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;


class CategoriaForm extends Form
{
    public string $name = '';

    public string $type = 'expense';

    public function store($service)
    {
        $this->validate([
            'name' => [
                'required',
                'min:4',
                // REGLA CLAVE: Único en la tabla categorías, pero solo donde user_id sea el mío
                Rule::unique('categories', 'name')->where(function ($query) {
                    return $query->where('user_id', Auth::id());
                }),
            ],
        ]);

        $nueva = $service->crearNuevaCategoria([
            'name' => $this->name,
            'type' => $this->type,
        ]);

        $this->reset();

        return $nueva;
    }

    public function messages()
    {
        return [
            'name.required' => 'Olvidaste ponerle un nombre a la categoría.',
            'name.min' => 'Ese nombre es muy corto, ponle al menos 4 letras.',
            'name.unique' => 'Ya existe ese nombre.',

        ];
    }

    public function validateField($propertyName)
    {

        if ($propertyName === 'name') {
            $this->validateOnly('name', [
                'name' => [
                    'required',
                    'min:5',
                    Rule::unique('categories', 'name')->where(fn($q) => $q->where('user_id', Auth::id()))
                ],
            ]);
        }
    }
}
