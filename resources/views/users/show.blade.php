@extends('layouts.app')

@section('title', 'Listagem do Usuário')

@section('content')

<h1>Listagem do Usuário {{$user->nome}}</h1>

<ul>
    <li>Nome: {{$user->name}}</li>
    <li>Email: {{$user->email}}</li>

</ul>

@endsection

