<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Usuario;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
    return view('site.login');
    }

    public function autenticar(Request $request){

        $regras = [
            'emailUsuario'   => 'required|email',
            'senhaUsuario'   => 'required'
        ];

        $msg = [
            'emailUsuario.required'     =>  'Email obrigatório',
            'emailUsuario.email'        =>  'O e-mail informado deve ser valiido',
            'senhaUsuario.required'     =>  'Senha obrigatória',
        ];

        $request->validate($regras, $msg);

        $emailUsuario = $request->get('emailUsuario');
        $senhaUsuario = $request->get('senhaUsuario');

        $usuario = Usuario::where('emailUsuario', $emailUsuario)->first();

        if(!$usuario){
            // Verificando email
            return back()->withErrors(['emailUsuario' => 'O email informado não existe']);
        }
        if($usuario->senhaUsuario != $senhaUsuario){
            return back()->withErrors(['senhaUsuario' => 'Senha incorreta']);
        }

        $tipoUsuario = $usuario->tipo_usuario;

        session([
            'emailUsuario' => $usuario->emailUsuario,
            'idUser' => $usuario->idUsuario,
        ]);

        if($tipoUsuario instanceof Cliente){
            session([
                'id' => $tipoUsuario->idCliente,
                'nome' => $tipoUsuario->nomeCliente,
                'tipoUsuario' => 'cliente',
            ]);
            return redirect()->route('dashboard.cliente');
        }
        else if($tipoUsuario instanceof Funcionario){
            session([
                'id' => $tipoUsuario->idFuncionario,
                'nome' => $tipoUsuario->nomeFuncionario,
                ''
            ]);
            return redirect()->route('dashboard.funcionario');
        }
    }
}
