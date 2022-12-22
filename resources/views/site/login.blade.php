@component('components.header')
@endcomponent
@component('components.navbar')
@endcomponent
<div id="container">
    <div id="container-login">
        <div id="wrap-login">
            <form id="login-form">
                <span id="login-form-title">
                    <img src="images/logo2.png" alt="Toppen" />
                </span>
                <span id="login-form-title"> Bem vindo </span>
                <div id="wrap-input">
                    <input id="input" type="email" placeholder="E-mail"/>
                </div>
                <div id="wrap-input">
                    <input id="input" type="password" placeholder="Senha"/>
                </div>
                <div id="container-login-form-btn">
                    <button id="login-form-btn">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
