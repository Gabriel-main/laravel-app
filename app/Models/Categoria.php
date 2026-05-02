<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = ["name", "type", "user_id"];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function budgets()
    {
        return $this->hasMany(Budget::class, 'category_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'category_id');
    }
}
