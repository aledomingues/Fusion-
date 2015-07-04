
  @if (\Session::get('isLogged'))
  <div id="user-controller" class="dropdown">
    <div class="dropdown-toggle" data-toggle="dropdown" id="user-account">
      <span class="caret"></span>
      <img src="{{ asset('/img/no-photo.jpg') }}" class="profile-photo-top">
      <div class="left">
        <p>{{\Session::get('userData')->name}}</p>
        <span>Empresa</span>
      </div>        
    </div>
    <ul class="dropdown-menu dropdown-menu-right user-submenu">
    <li><a href="{{url('/profile')}}">Perfil do usuário</a></li>
    <li class="divider"></li>
    <li><a href="{{url('/logout')}}">Sair</a></li>
    </ul>
  </div>  
  @else
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-top" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-top">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/conheca')}}">Conheça o Vídeo Jobs</a></li>
        <li><a href="{{url('/vantagens')}}">Vantagens</a></li>
        <li><a href="{{url('/contato')}}">Contato</a></li>
        <li class="login"><a href="{{url('/login')}}">Entrar</a></li>
      </ul>
    </div>
  @endif 