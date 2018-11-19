<div class="flex-center position-ref full-height">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{ route('questions.index') }}">Laravel Answer</a>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                  <ul class="navbar-nav mr-auto mt-3 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="{{ route('questions.index') }}">Home </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Recent</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Populer</a>
                    </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                          <a href="{{ route('questions.create') }}" class="btn btn-primary" style="margin-top:5px;">Ask A Question</a>
                          @guest
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          <li class="nav-item">
                              @if (Route::has('register'))
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              @endif
                          </li>
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }} <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest

                        </ul>
                      </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                  </nav>
