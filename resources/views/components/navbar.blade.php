<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">Bazaar shop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('homepage')}}">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('create.article')}}">Crea articolo</a></li>
            </ul>
          </li>
  

          @guest
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
  
          <li class="nav-item">
            <a class="nav-link" href="/register">Registrati</a>
          </li>
          @endguest
        
          @auth
              
                 <form action="/logout" method="post">

                      @csrf
    
                     <button type="submit">Logout</button>
    
                </form>

          @endauth    
  
        </ul>
  
      </div>
  
    </div>
  </nav>