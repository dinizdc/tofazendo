@extends('layouts.base_login')
@section('formulario')
    <form class="md-float-material" method="POST" action="{{ route('register') }}">
        @csrf
        <label class="d-flex justify-content-center">Criar uma conta</label>
        <div class="form-group">

            <label>Nome Completo</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                value="{{ old('name') }}" required autocomplete="name" autofocus
                placeholder="Digite o nome completo do usuário">

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" placeholder="Digite o e-mail do usuário">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                required autocomplete="new-password" placeholder="Digite uma senha para este usuário">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Confirmação da Senha</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                autocomplete="new-password" placeholder="Confirme a senha para este usuário">
        </div>
        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Criar Conta</button>
        <div class="register-link m-t-15 text-center">
            <p>Já tem uma conta? <a href="{{ route('login') }}"> Acessar sua conta</a></p>
        </div>
    </form>
@endsection
