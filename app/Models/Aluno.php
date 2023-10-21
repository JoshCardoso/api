<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $table='usuarios';

    public function scopeGetAluno($query){
        
        return $query->where('id_permissao', 3);
    }
}
