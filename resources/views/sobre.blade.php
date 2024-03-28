@extends('layout.app')
@section('title',$title)
@section('content')
    <h1>{{$cabecalho}}</h1>
    <div id="conteudo">
        <h2>{{$nome}}</h2>
        <p>{{$apresentacao}}</p>
    </div>
    <br>
    <a href="/">Voltar a Home</a>
@endsection