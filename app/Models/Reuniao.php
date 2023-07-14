<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reuniao extends Model

{
    protected $table = "reunioes";

    protected $fillable = [
        'id_solicitante',
        'id_sala',
        'tema_reuniao',
        'data_reuniao',
        'horario_inicio',
        'horario_termino',
        'status_reuniao'
    ];
    
   
}