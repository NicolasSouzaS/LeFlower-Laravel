<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Usuario;
use GuzzleHttp\Client;
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
            'emailUsuario'      => 'nullable|email|max:200',
            'telefoneUsuario'   => 'nullable|string|max:16',
        ]);

        // $ultimoUsuario = Usuario::latest('idUsuario')->first();
        // $ultimoId = $ultimoUsuario ? $ultimoUsuario->idUsuario : 0;


        // $proximoId = $ultimoId +1;

        $usuario = new Usuario();
        $cliente = new Cliente();

        $usuario->nomeUsuario = $request->input('nomeUsuario');
        $cliente->nomeCliente = $request->input('nomeUsuario');

        $usuario->senhaUsuario = $request->input('senhaUsuario');
        $cliente->senhaCliente = $request->input('senhaUsuario');

        $usuario->emailUsuario = $request->input('emailUsuario');
        $cliente->emailCliente = $request->input('emailUsuario');
        $cliente->telefoneCliente = $request->input('telefoneUsuario');

        $cliente->save();

        $ultimoClienteId = $cliente->idCliente;

        $usuario->tipoUsuario = 'cliente';
        $usuario->tipoUsuario_id = $ultimoClienteId;
        $usuario->tipoUsuario_type = 'cliente';

        $usuario->save();

    }
}
