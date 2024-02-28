<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Usuario;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(){
        return view('site.cadastro');
    }

    public function cadastroCliente(Request $request){
        $request->validate([
            'nomeUsuario'       => 'nullable|string|max:100',
            'senhaUsuario'      => 'nullable|string|max:255',
            'tipoUsuario'       => 'nullable|string|max:50',
            'tipoUsuario_type'  => 'required|string|max:50',
            'tipoUsuario_id'    => 'required|integer',
            'emailUsuario'      => 'nullable|email|max:200',
        ]);

        // $ultimoUsuario = Usuario::latest('idUsuario')->first();
        // $ultimoId = $ultimoUsuario ? $ultimoUsuario->idUsuario : 0;


        // $proximoId = $ultimoId +1;

        $usuario = new Usuario();
        $usuario->nomeUsuario = $request->input('nomeUsuario');
        $usuario->senhaUsuario = $request->input('senhaUsuario');
        $usuario->emailUsuario = $request->input('emailUsuario');
        $usuario->tipoUsuario = 'administrativo';
        $usuario->tipoUsuario_type = 'funcionario';
        $usuario->tipoUsuario_id = '1';

        $usuario->save();

    }
}
