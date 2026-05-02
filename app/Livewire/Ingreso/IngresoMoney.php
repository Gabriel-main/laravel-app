<?php

namespace App\Livewire\Ingreso;

use Livewire\Component;
use App\Services\Categoria\CategoriaServices;
use App\Services\Transaction\TransactionServices;
use App\Livewire\Forms\CategoriaIngresoForm;
use App\Livewire\Forms\IngresoForm;

class IngresoMoney extends Component
{
    protected CategoriaServices $services;
    public CategoriaIngresoForm $categoriaForm;
    public IngresoForm $ingresoForm;
    protected TransactionServices $transServices;

    public function boot(
        CategoriaServices $services,
        TransactionServices $transServices,
    ) {
        $this->services = $services;
        $this->transServices = $transServices;
    }
    public $showModal = false;

    // Propiedades de la Categoría
    public $categoria_id;
    public $creandoNuevaCategoria = false;
    public $nuevaCategoriaNombre = "";

    public function mount()
    {
        // Inicializar los formularios si no lo están
        $this->ingresoForm ??= new IngresoForm();
        $this->categoriaForm ??= new CategoriaIngresoForm();
    }

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
        // Validar datos de ingreso usando la lógica de IngresoForm
        try {
            if (method_exists($this->ingresoForm, 'validarTodo')) {
                $validated = $this->ingresoForm->validarTodo();
            } else {
                // Fallback: validar de forma manual si no está disponible
                $validated = null;
                throw new \RuntimeException('Validación no disponible en IngresoForm');
            }
        } catch (\Throwable $e) {
            $this->dispatch(
                "notify",
                message: 'Error de validación: ' . $e->getMessage(),
                type: 'error',
            );
            return;
        }

        // Asegurar que exista o crear la categoria
        $categoryId = $validated['categoria_id'] ?? null;
        if (($validated['creandoNuevaCategoria'] ?? false) && empty($categoryId)) {
            $nueva = $this->services->crearNuevaCategoria([
                'name' => $validated['categoriaForm']['name'],
                'type' => $this->ingresoForm->type,
            ]);
            $categoryId = $nueva->id;
        }

        // Mapear moneda a currency_id (asumiendo IDs conocidos; ajustar si tu seeds cambian)
        $currencyMap = [ 'USD' => 1, 'VES' => 2, 'EUR' => 3 ];
        $currencyId = $currencyMap[$validated['moneda'] ?? 'USD'] ?? null;
        if (!$currencyId) {
            $this->dispatch(
                "notify",
                message: 'Moneda inválida.',
                type: 'error',
            );
            return;
        }

        $data = [
            'date' => $validated['fecha'],
            'currency_id' => $currencyId,
            'category_id' => $categoryId,
            'amount' => $validated['monto'],
            'type' => 'income',
            'description' => $validated['descripcion'],
        ];

        try {
            $this->transServices->guardar($data);
            $this->showModal = false;
            $this->dispatch(
                "notify",
                message: 'Ingreso guardado con éxito.',
                type: 'success',
            );
            // Limpiar formularios
            $this->ingresoForm = new IngresoForm();
            $this->categoriaForm = new CategoriaIngresoForm();
            $this->categoria_id = null;
            $this->creandoNuevaCategoria = false;
            $this->nuevaCategoriaNombre = "";
        } catch (\Throwable $e) {
            $this->dispatch(
                "notify",
                message: 'Error al guardar: ' . $e->getMessage(),
                type: 'error',
            );
        }
    }

    public function render()
    {
        return view("livewire.ingreso.ingreso-money", [
            "categorias" => $this->services->obtenerCategoriasDelUsuario(
                "income",
            ),
        ]);
    }
}
