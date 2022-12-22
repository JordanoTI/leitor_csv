@section('titulo', 'Origem')
@include('components.header')
@include('components.navbar')
<div id="container">
    <div id="container-login">
        <div id="wrap-login">
            <form id="login-form" action="{{ route('app.origem') }}" method="get">
                <span id="login-form-title">
                    <img src="{{ asset('images/logo2.png') }}" alt="Toppen" />
                </span>
                <span id="login-form-title"> Bem vindo! </span>
                <div id="wrap-input">
                    <input id="input" name="ftp" type="text" placeholder="ftp" />
                </div>
                <div id="wrap-input">
                    <input id="input" name="porta" type="text" placeholder="porta" />
                </div>
                <div id="wrap-input">
                    <input id="input" name="usuario" type="text" placeholder="usuario" />
                </div>
                <div id="wrap-input">
                    <input id="input" name="senha" type="password" placeholder="senha" />
                </div>
                <div id="container-login-form-btn">
                    <button id="login-form-btn">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('components.footer')
