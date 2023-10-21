<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    public function scopeGetTeacher($query)
    {
        return $query->where('id_permissao', 2);
    }
}
