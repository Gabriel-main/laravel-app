<?php
namespace App\Services\Transaction;

use App\Respository\TransactionRespository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TransactionServices
{
    public function __construct(protected TransactionRespository $repository)
    {
        // property promoted; no extra assignment needed
    }

    /**
     * Crea un nuevo ingreso asociado al usuario autenticado.
     *
     * @param array $data
     * @return mixed
     * @throws \Throwable
     */
    public function crearNuevoIngreso(array $data)
    {
        if (empty($data)) {
            throw new \InvalidArgumentException(
                "Datos de transacción no proporcionados.",
            );
        }

        $data["user_id"] = Auth::id();
        if (empty($data["user_id"])) {
            throw new \RuntimeException("Usuario no autenticado.");
        }

        DB::beginTransaction();
        try {
            $transaction = $this->repository->createdTransaction($data);
            DB::commit();
            return $transaction;
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error("Error al guardar: " . $e->getMessage(), [
                "exception" => $e,
            ]);
            throw $e;
        }
    }
}
