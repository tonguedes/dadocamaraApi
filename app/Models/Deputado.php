<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deputado extends Model
{
    use HasFactory;

    protected $fillable = [
        'camara_id',
        'nome',
        'partido',
        'uf',
    ];

    public function despesas()
    {
        return $this->hasMany(Despesa::class);
    }
}
