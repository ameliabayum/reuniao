<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $fillable = [
        'nome_sala',
        'horario_abertura',
        'horario_fechamento',
        'id_usuario_create',
        
    ];

}
