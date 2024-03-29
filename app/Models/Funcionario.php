<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = 'tblfuncionarios';
    protected $primaryKey = 'idFuncionario';

    public function usuario(){
        return $this->morphOne(Usuario::class, 'tipo_usuario');
    }
}
