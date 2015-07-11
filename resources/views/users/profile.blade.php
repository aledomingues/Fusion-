@extends('layouts.default')

@section('content')
<h1>Editar Perfil</h1>

<div class="profile-image left">
	<img src="{{ asset('/img/'.(!empty($userData->image) ? $userData->image[0]->image : 'no-photo.jpg')) }}">
	<a href="#" class="btn bt-editar">Alterar Foto</a>
</div>

<div class="profile-edit left">
	<h2>Perfil do usuário</h2>
	<form novalidate="novalidate" action='{{url("profile")}}' method="post" id="editProfileForm">
	<div class="form-group">
        <div class="input-icon">
            <input type="text" id="edit-name" name="name" placeholder="Nome" autocomplete="on" class="form-control placeholder-no-fix" value="{{$userData->name}}">
        </div>
    </div>

	<div class="form-group">
        <div class="input-icon">
            <input type="email" id="edit-email" name="email" placeholder="E-Mail" autocomplete="on" class="form-control placeholder-no-fix" value="{{$userData->email}}">
        </div>
    </div>

    <div class="form-group">
        <div class="input-icon">
            <input type="text" id="edit-ddd" name="telephone" placeholder="DDD" autocomplete="on" class="form-control placeholder-no-fix" value="">
            <input type="text" id="edit-telephone" name="telephone" placeholder="Telefone" autocomplete="on" class="form-control placeholder-no-fix" value="">
        </div>
    </div>

	<div class="form-group">
        <div class="input-icon">
            <input type="text" id="edit-cpf" name="cpf" placeholder="CPF" autocomplete="on" class="form-control placeholder-no-fix" value="{{$userData->cpf}}">
        </div>
    </div>

	<div class="form-group">
        <div class="input-icon">
            <input type="text" id="edit-birthday" name="birthday" placeholder="Data de Nascimento" autocomplete="on" class="form-control placeholder-no-fix" value="{{$userData->birthday}}">
        </div>
    </div>       

    <div class="form-group">
    Gênero: 
        <div class="input-icon">
            <input type="radio" name="gender" value="M" {{$userData->gender == 'M' ? 'checked="checked"' : ''}}>M
            <input type="radio" name="gender" value="F" {{$userData->gender == 'F' ? 'checked="checked"' : ''}}>F
        </div>
    </div>       

    <div class="form-group">
        <div class="input-icon">
            <input type="text" id="edit-linkedin" name="linkedin" placeholder="LinkedIn" autocomplete="on" class="form-control placeholder-no-fix">
        </div>
    </div>  

    <div class="form-group">
        <div class="input-icon">
            <input type="text" id="edit-cities" name="Cidade" placeholder="Cidade" autocomplete="on" class="form-control placeholder-no-fix">
        </div>
    </div>  

    <div class="form-group">
        <div class="input-icon">
            <input type="text" id="edit-states" name="Estado" placeholder="Estado" autocomplete="on" class="form-control placeholder-no-fix">
        </div>
    </div>  

    <div class="form-group">
        <div class="input-icon">
            <input type="password" id="edit-password" name="password" placeholder="Digite sua nova senha" autocomplete="off" class="form-control placeholder-no-fix">
        </div>
    </div>

    <div class="form-group">
        <div class="input-icon">
            <input type="password" id="edit-password2" name="password" placeholder="Confirme sua nova senha" autocomplete="off" class="form-control placeholder-no-fix">
        </div>
    </div>

    <div class="form-actions">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button class="btn blue pull-right" id="submit_login" type="submit">
            Salvar
        </button>
	</div>	
	</form>
	
</div>
@endsection