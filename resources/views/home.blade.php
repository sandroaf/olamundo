@extends('layout.app')
@section('title',$title)
@section('content')
    <h1>{{$title}}</h1>
    <ul id="menu">
        <li><a href="/sobre">Sobre</a></li>
        <li><a href="/contato">Contato</a></li>
    </ul>
@endsection