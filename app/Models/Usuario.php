<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perfil;
class Usuario extends Model
{
    protected $table = "usuarios";
    protected $fillable = [
        'nome_usuario',
        'email_usuario',
        'senha_usuario',
        'perfil_id',
        'created_at',
        'updated_at'
    ];
    public function perfis(){
        return $this->belongsTo(Perfil::class, 'perfil_id');
    }
}