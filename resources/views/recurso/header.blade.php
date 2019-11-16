       <header>
          <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                  <h4 class="text-white">Electoral</h4>
                  <p class="text-muted">Sistema automatizado de votaciones</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                  <h4 class="text-white">Navegación</h4>
                  <ul class="list-unstyled">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" style="color: #fff;" href="{{ route('login') }}">{{ __('Iniciar') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" style="color: #fff;" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                @endif
                            </li>
                        @else
                        <li><a href="{{ route('candidato') }}" style="color: #fff;">Candidatos</a></li>
                        <li><a href="{{ route('partido') }}" style="color: #fff;">Partidos</a></li>
                        <li><a href="{{ route('ciudadano') }}" style="color: #fff;">Ciudadanos</a></li>
                        <li><a href="{{ route('home') }}" style="color: #fff;">Puesto electivos</a></li>
                        <li><a href="{{ route('elecciones') }}" style="color: #fff;">Eleciones</a></li>
                            <li class="nav-item dropdown">
                                <a style="color: #fff;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
              <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
                <strong>Electoral</strong>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </div>
        </header>