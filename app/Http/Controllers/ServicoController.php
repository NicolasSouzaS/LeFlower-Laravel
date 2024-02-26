<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index(){
        return view('site.servico');
    }

    public function servicoCabelo(){
        return view('site.servicos.cabelo');
    }
}
