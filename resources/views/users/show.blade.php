@extends('layouts.app')

@section('title', 'Listagem do Usuário')

@section('content')

<h1>Listagem do Usuário {{$user->nome}}</h1>

<ul>
    <li>Nome: {{$user->name}}</li>
    <li>Email: {{$user->email}}</li>
</ul>

<form action="{{route('users.delete', $user->id)}}" method="post">
    @csrf
    @method('delete')
    <button type="submit">Excluir</button>                    
</form>


@endsection

