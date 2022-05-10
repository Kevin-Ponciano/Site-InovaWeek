<!-- Utilizando o scopo HTML do /layouts/main.blade.php -->
@extends('layouts.main')

@section('title', 'Odonto On')

<link href="{{URL::asset('css/login.css')}}" rel="stylesheet">
@section('content')
    <main class="form-signin text-center">
        <form>
            <img class="mb-4" src="{{url('assets/odon.png')}}" alt="" width="132" height="117">
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <div class="form-floating mb-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Senha</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Lembrar Senha
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary mb-2" type="submit">Entrar</button>
            <a href='/cadastro' class="w-50">Cadastrar</a>
        </form>
@endsection

