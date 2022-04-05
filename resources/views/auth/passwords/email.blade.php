@extends('layouts.base_login')

@section('formulario')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <label class="d-flex justify-content-center">Recuperação de senha</label>
        <div class="form-group">
            <label>E-mail</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus
                placeholder="Digite o e-mail para recuperar a senha">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-flat m-b-15">Recuperar</button>
        <div class="register-link m-t-15 text-center">
            <p>Já tem uma conta? <a href="{{ route('login') }}"> Acessar sua conta</a></p>
        </div>
    </form>
@endsection
