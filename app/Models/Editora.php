<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome_editora',
        'estado_editora'
    ];
}
