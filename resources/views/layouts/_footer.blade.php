<footer>
<div class="container">
    <div class="collapse navbar-collapse" id="navbar-bottom">
    @if(! \Session::get('isLogged'))
      <ul class="nav navbar-nav">
        <li><a href="{{url('/termos-de-uso')}}">Termos de Uso</a></li>
        <li><a href="{{url('/politica-de-privacidade')}}">Política de Privacidade</a></li>
      </ul>
    @endif  
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/contato">contato@videojobs.com.br</a></li>
      </ul>
    </div>
</div>
</footer>