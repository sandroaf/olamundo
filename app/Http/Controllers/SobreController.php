<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    public function index() {
        $data['title'] = 'Contato';
        $data['cabecalho'] = 'Entre em contato';
        $data['nome'] = 'Prof. Sandro Alencar Fernandes';
        $data['apresentacao'] = 'Essa página apresenta o uso de Laraval, Views, Controller e o Template Blade';
        return view('sobre',$data);
     }
}
