<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Perfil extends Model
{
    protected $fillable = [
        'descricao_perfil',
    ];
    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }
}
