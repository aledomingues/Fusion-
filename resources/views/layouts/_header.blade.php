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
        @if (\Session::get('isLogged'))
          <li class="login"><a href="{{url('/logout')}}">Sair</a></li>
        @else
          <li class="login"><a href="{{url('/login')}}">Entrar</a></li>
        @endif
        
      </ul>
    </div>

  @if (\Session::get('isLogged'))
    {{\Session::get('userData')->name}}
  @endif