<nav class="navbar navbar-expand-md bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      @guest
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn btn-info mr-2" href="#">Register</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-info mr-2" href="#">Login</a>
            </li>
        </ul>
      @endguest
      @auth
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="btn btn-info mr-2" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-info mr-2" href="#">Logout</a>
            </li>
          </ul>
      @endauth
    </div>
  </nav>
