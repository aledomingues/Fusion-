@extends('layouts.default')

@section('content')
	<div class="row">
    <h2>Esqueci a Senha</h2>
		<form class="login-form login-principal" novalidate="novalidate" action='{{url("password")}}' method="post" id="loginForm">
                
            <div style="display: none" class="notif-alert alert alert-danger" id="login-error">
                <div id="login-error-c"></div>
            </div>
                 
                <div class="form-group">
                    <div class="input-icon">
                        <input type="email" id="login-email" name="email" placeholder="E-Mail" autocomplete="on" class="form-control placeholder-no-fix">
                    </div>
                </div>

                <button class="btn blue pull-right" id="submit_login" type="submit">
                    Enviar
                </button>
                </div>
<!--                    <label class="checkbox"><input type="checkbox" value="1" name="remember">Mantenha logado</label>
 -->            
        </form>
    </div>
@endsection

@section('vj-js')
    <script type="text/javascript" src="{{asset('js/vj-login.js')}}"></script>
@endsection
