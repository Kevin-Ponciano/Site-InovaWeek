@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')

    <link href="{{URL::asset('css/signup.css')}}" rel="stylesheet">
<div class="container">
    <main>
        <div class="py-5 text-start">
            <h2>Criar Conta</h2>
        </div>

        <div class="row g-5">
            <div class="col-md-7 col-lg-8">
                <h4 class="mb-3">Dados Pessoais</h4>
                <form action="/views" method="post" class="needs-validation">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Por favor, informe um nome válido.
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">Sobrenome</label>
                            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Por favor, informe um sobrenome válido.
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
                            <div class="invalid-feedback">
                                Por favor, insira um email válido.
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                            <div class="invalid-feedback">
                                Por favor, insira uma data de nascimento válida.
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="gender" class="form-label">Gênero</label>
                            <select class="form-select" id="genero" name="genero" required>
                                <option value="">Selecione...</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Prefiro não informar">Prefiro não informar</option>
                            </select>
                            <div class="invalid-feedback">
                                Por favor, insira um gênero válido.
                            </div>
                        </div>

                        <div
                            class="col-6"> {{-- PRECISA COLOCAR A MASCARA PARA SO ACEITAR ENTRADA FORMATADA 127.456.789-10 --}}
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control cpf-mask" id="CPF" name="CPF" placeholder="Ex.: 000.000.000-00" required>
                            <div class="invalid-feedback">
                                Por favor, insira uma data de nascimento válida.
                            </div>
                        </div>
                    </div>

                    <hr class="mt-4">

                    <div class="row g-3">
                        <h4>Definir Senha</h4>
                        <div class="col-6 ">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" required>
                            <div class="invalid-feedback">
                                Por favor, insira uma senha válida.
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="ConfSenha" class="form-label">Confirmar Senha</label>
                            <input type="password" class="form-control" id="confirm_senha" name="confirm_senha" required>
                            <div class="invalid-feedback">
                                As senhas não coincidem.
                            </div>
                        </div>
                    </div>


                    <hr class="my-4">

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="termo" name="termo" value="1" onclick="func();" required>
                        <label class="form-check-label" for="same-address">
                            Eu concordo com os <a href="">Termos de Uso e Política de Privacidade</a>
                        </label>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </main>
</div>
{{--Imprimindo Dados do CadastroController--}}
{{--@foreach($usuarios as $usuario)--}}
{{--    <p>--}}
{{--        Nome: {{$usuario->nome}} {{$usuario->sobrenome}}<br>--}}
{{--        Email: {{$usuario->email}}<br>--}}
{{--    </p>--}}
{{--@endforeach--}}

<script>func=()=>{let dado;dado=document.getElementsByName('termos')[0].checked;console.log(dado)}</script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="form-validation.js"></script>
@endsection
