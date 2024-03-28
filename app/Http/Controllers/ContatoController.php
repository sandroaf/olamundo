<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index() {
        $data['title'] = 'Contato';
        $data['cabecalho'] = 'Entre em contato';
        return view('contato.contato',$data);
     }
}
