<nav class="navbar navbar-expand-md bg-light mr-2">
    <a class="navbar-brand" href="{{route('home')}}">LaraAuth</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      @guest
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn btn-info mr-2" href="{{route('auth.register.form')}}">Register</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-info mr-2" href="{{route('auth.login.form')}}">Login</a>
            </li>

        </ul>
      @endguest
      @auth
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle btn btn-info" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                    <a class="dropdown-item btn btn-info" href="{{route('auth.logout')}}">Logout</a>
                    </div>
                  </li>
          </ul>
      @endauth
    </div>
  </nav>
