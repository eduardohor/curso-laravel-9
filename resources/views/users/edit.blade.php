@extends('layouts.app')

@section('title', 'Editar Usuário')

@section('content')

    <h1>Editar Usuário {{$user->nome}}</h1>
    
    <form action="{{route('users.update', $user->id)}}" method="post">
        @method('PUT')
        @csrf
        <input type="text" name="name" placeholder="Nome" value="{{$user->name}}">
        <input type="email" name="email" placeholder="E-mail" value="{{$user->email}}">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>

@endsection