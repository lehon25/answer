<div class="flex-center position-ref full-height">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="{{ route('questions.create') }}">Laravel Answer</a>

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
                          <a href="" class="btn btn-primary" style="margin-top:5px;">Ask A Question</a>

                        </ul>
                      </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                  </nav>
