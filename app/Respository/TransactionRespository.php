<?php

namespace App\Respository;

use App\Models\Transaction;

class TransactionRespository
{
    public function __construct(protected Transaction $model)
    {
        $this->model = $model;
    }

    public function createdTransaction($data)
    {
        return $this->model->create($data);
    }
}
