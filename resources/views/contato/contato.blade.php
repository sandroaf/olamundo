@extends('layout.app')
@section('title',$title)
@section('content')
    <h1>{{$cabecalho}}</h1>
    <a href="mailto:sandroaf@unidavi.edu.br">sandroaf@unidavi.edu.br</a>
    <br>
    <?php
        echo $_SERVER['SCRIPT_FILENAME'];
    ?>
    <hr>
    <p>Obrigado por visitar: {{$title}}.{{$cabecalho}}</p>
    <br>
    <a href="/">Voltar a Home</a>
@endsection
