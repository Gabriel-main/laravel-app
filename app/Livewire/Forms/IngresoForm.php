<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class IngresoForm extends Form
{
    public string $name = "";
    public string $type = "income";

    // Nuevas propiedades para el formulario de ingreso
    public string $fecha = "";
    public string $moneda = "USD";
    public float $monto = 0.0;
    public string $descripcion = "";
    public ?int $categoria_id = null;
    public bool $creandoNuevaCategoria = false;
    public array $categoriaForm = ["name" => ""];

    public function store($service)
    {
        $this->validate([
            // Validaciones para el ingreso detallado
            "fecha" => ["required", "date"],
            "moneda" => ["required", Rule::in(["USD", "VES", "EUR"])],
            "monto" => ["required", "numeric", "min:0.01"],
            "descripcion" => ["required", "string", "max:100"],
            // Lógica de categoría: si no se crea una nueva, debe existir una categoría seleccionada
            "categoria_id" => ["nullable", Rule::exists("categories", "id")],
            "creandoNuevaCategoria" => ["boolean"],
            "categoriaForm.name" => [
                // Solo obligatorio si se está creando una nueva categoría
                "required_if:creandoNuevaCategoria,true",
                Rule::unique("categories", "name")->where(
                    fn($q) => $q->where("user_id", Auth::id()),
                ),
            ],
            // Regla existente para la creación de la categoría por nombre
            "name" => [
                "required",
                "min:4",
                // REGLA CLAVE: Único en la tabla categorías, pero solo donde user_id sea el mío
                Rule::unique("categories", "name")->where(function ($query) {
                    return $query->where("user_id", Auth::id());
                }),
            ],
        ]);

        // Si se está creando una nueva categoría, crearla previamente
        if ($this->creandoNuevaCategoria && empty($this->categoria_id)) {
            $service->crearNuevaCategoria([
                "name" => $this->categoriaForm["name"],
                "type" => $this->type,
            ]);
        }

        $nueva = $service->crearNuevaCategoria([
            "name" => $this->name,
            "type" => $this->type,
        ]);

        $this->reset();

        return $nueva;
    }

    public function messages()
    {
        return [
            "name.required" => "Olvidaste ponerle un nombre a la categoría.",
            "name.min" => "Ese nombre es muy corto, ponle al menos 4 letras.",
            "name.unique" => "Ya existe ese nombre.",
            // Nuevas validaciones
            "fecha.required" => "La fecha es obligatoria.",
            "fecha.date" => "La fecha no es válida.",
            "moneda.required" => "La moneda es obligatoria.",
            "moneda.in" => "La moneda debe ser USD, VES o EUR.",
            "monto.required" => "El monto es obligatorio.",
            "monto.numeric" => "El monto debe ser numérico.",
            "monto.min" => "El monto debe ser mayor que 0.",
            "descripcion.required" => "La descripción es obligatoria.",
            "descripcion.max" => "La descripción es demasiado larga.",
            "categoria_id.exists" => "La categoría seleccionada no es válida.",
            "creandoNuevaCategoria.boolean" =>
                "El indicador de creación de categoría debe ser válido.",
            "categoriaForm.name.required_if" =>
                "El nombre de la nueva categoría es obligatorio cuando se crea una nueva.",
            "categoriaForm.name.unique" =>
                "Ya existe esa categoría para este usuario.",
        ];
    }

    public function validateField($propertyName)
    {
        if ($propertyName === "name") {
            $this->validateOnly("name", [
                "name" => [
                    "required",
                    "min:5",
                    Rule::unique("categories", "name")->where(
                        fn($q) => $q->where("user_id", Auth::id()),
                    ),
                ],
            ]);
        }
        if ($propertyName === "fecha") {
            $this->validateOnly("fecha", [
                "fecha" => ["required", "date"],
            ]);
        }
        if ($propertyName === "moneda") {
            $this->validateOnly("moneda", [
                "moneda" => ["required", Rule::in(["USD", "VES", "EUR"])],
            ]);
        }
        if ($propertyName === "monto") {
            $this->validateOnly("monto", [
                "monto" => ["required", "numeric", "min:0.01"],
            ]);
        }
        if ($propertyName === "descripcion") {
            $this->validateOnly("descripcion", [
                "descripcion" => ["required", "string", "max:255"],
            ]);
        }
        if ($propertyName === "categoria_id") {
            $this->validateOnly("categoria_id", [
                "categoria_id" => [
                    "nullable",
                    Rule::exists("categories", "id"),
                ],
            ]);
        }
        if ($propertyName === "categoriaForm.name") {
            $this->validateOnly("categoriaForm.name", [
                "categoriaForm.name" => [
                    "required_if:creandoNuevaCategoria,true",
                    Rule::unique("categories", "name")->where(
                        fn($q) => $q->where("user_id", Auth::id()),
                    ),
                ],
            ]);
        }
    }

    /**
     * Validates all fields for an ingreso form and returns validated data.
     */
    public function validarTodo()
    {
        return $this->validate([
            "fecha" => ["required", "date"],
            "moneda" => ["required", Rule::in(["USD", "VES", "EUR"])],
            "monto" => ["required", "numeric", "min:0.01"],
            "descripcion" => ["required", "string", "max:100"],
            "categoria_id" => ["nullable", Rule::exists("categories", "id")],
            "creandoNuevaCategoria" => ["boolean"],
            "categoriaForm.name" => [
                "required_if:creandoNuevaCategoria,true",
                Rule::unique("categories", "name")->where(
                    fn($q) => $q->where("user_id", Auth::id()),
                ),
            ],
            "name" => [
                "required",
                "min:4",
                Rule::unique("categories", "name")->where(function ($query) {
                    return $query->where("user_id", Auth::id());
                }),
            ],
        ]);
    }
}
