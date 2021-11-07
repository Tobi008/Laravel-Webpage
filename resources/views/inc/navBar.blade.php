<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about-us">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact-us" >Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/pictures" >Pictures</a>
        </li>
        @auth
        <li class="nav-item">
          <a class="nav-link" href="/dashboard" >Dashboard</a>
        </li>
        @endauth
      </ul>

      <form class="d-flex">
        <input class="form-control me-2 p-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
      <ul class="navbar-nav ">
        @auth
          <li class="nav-item">
            <a class="nav-link" href="/profile" >{{auth()->user()->name}}</a>
          </li>

          <form action="/logout" method="post"  class="nav-item">
            @csrf
            <button type="submit" class="btn btn-primary"> Logout</button>
        </form>
      @endauth

      @guest
        <li class="nav-item">
          <a class="nav-link" href="/login-form" >Login</a>
        </li>

        <li>
          <a class="nav-link" href="/registration" >Sign up</a>          
        </li>
      @endguest
      </ul>
    </div>
</nav>