@extends('layouts.base_login')
@section('formulario')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label class="d-flex justify-content-center">Login</label>
        <div class="form-group">
            <label>E-mail</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Digite aqui o seu e-mail">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                required autocomplete="current-password" placeholder="Digite aqui a sua senha">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
            </label>
            <label class="pull-right">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        Esqueceu a senha?
                    </a>
                @endif
            </label>

        </div>
        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Acessar</button>

        <div class="register-link m-t-15 text-center">
            <p>Não tem uma conta? <a href="{{ route('register') }}"> Crie uma aqui</a></p>
        </div>
    </form>
@endsection
