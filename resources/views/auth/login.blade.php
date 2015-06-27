@extends('layouts.default')

@section('content')
	<div class="row">
		<form class="login-form login-principal" novalidate="novalidate">
                
            <div style="display: none" class="notif-alert alert alert-danger" id="login-error">
            <div id="login-error-c">Mens</div></div>
                 
                    
                <div class="form-group">
                    <div class="input-icon">
                        <input type="email" id="login-email" name="email" placeholder="E-Mail" autocomplete="on" class="form-control placeholder-no-fix">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <input type="password" id="login-password" name="password" placeholder="Senha" autocomplete="off" class="form-control placeholder-no-fix">
                    </div>
                </div>
                <div class="form-actions">
                    <div class="forget-password">
                        <p><a href="/password">Esqueci a senha</a></p>
                    </div>  
                    <button class="btn blue pull-right" id="submit_login" type="submit">
                        Entrar
                    </button>
                </div>
<!--                    <label class="checkbox"><input type="checkbox" value="1" name="remember">Mantenha logado</label>
 -->            </form>
    </div>
@endsection
