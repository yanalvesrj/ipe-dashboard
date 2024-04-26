@if ($mensagem = Session::get('erro'))
    {{$mensagem}}
@endif
@if($errors->any())
    @foreach ($errors->all() as $error)
       {{$error}} <br>
    @endforeach
@endif
@extends('layouts.index')
@section('title','Login')

@section('content')
<div class="container">
    <h2>IPE Login</h2>
    <form action="{{route('login.auth')}}" method="POST">
        @csrf
        <!-- Conferir o tipo do input do ambiente, não esquecer-->
        <input type="text" name="ambiente" placeholder="Ambiente" required>
        <input type="text" name="usuario" placeholder="Usuário" required>
        <input type="password" name="password" placeholder="Senha" required>
        <input type="submit" value="Entrar">
    </form>
</div>
@endsection
