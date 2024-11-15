<nav class="navbar navbar-expand-lg navbar-customclass shadow p-4 rounded">
    <div class="container-fluid">
      
      {{-- LOGO --}}
      <a class="navbar-brand" href="{{route('homepage')}}"><i class="bi bi-shop px-3"></i></a>
      
      {{-- BARRA DI RICERCA --}}
      <form action="{{route('article.search')}}" class="d-flex ms-auto" role="search" method="GET">
        <div class="input-group">
          <input type="search" name="query" class="form-control" placeholder="Scrivi..." aria-label="search">
          <button type="submit" class="input-group-text btn btn-danger" id="basic-addon2"> Cerca </button>
        </div>
      </form>
      
      {{-- BOTTONE COLLAPSE --}}
      <button class="navbar-toggler pl-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie </a>
            <ul class="dropdown-menu navbar-customclass">
              @foreach($categories as $category)
                  <li><a href="{{route('byCategory', ['category'=>$category])}}" class="dropdown-item text-capitalize">{{$category->name}}</a></li>
                  @if (!$loop->last)
                    <hr class="dropdown-divider">
                  @endif
              @endforeach
            </ul>
          </li>
          {{-- ho commentato il tasto home perché di solito la home si raggiunge cliccando sul logo --}}
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{route('homepage')}}">Home</a>
          </li> --}}
          <li>
            <a class="nav-link" href="{{route('article.index')}}">Esplora</a>
          </li>

          {{-- modifica --}}
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu navbar-customclass">
              @guest
                <li class="nav-item">
                  <a class="nav-link btn btn-outline-danger" href="/login">Login</a>
                </li>
  
                <li class="nav-item">
                  <a class="nav-link btn btn-outline-danger" href="/register">Registrati</a>
                </li>
              @endguest

              @auth
                  <li>
                    <a class="dropdown-item btn btn-outline-danger" href="{{route('create.article')}}">Crea articolo</a></li>
                  <li>
                    @if (Auth::user()->is_revisor)  
                    <hr class="dropdown-divider">
                        <li>
                          <a href=" {{ route('revisor.index')}}" class="dropdown-item btn btn-outline-danger position-relative w-sm-25">Zona revisore
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ \App\Models\Article::toBeRevisedCount() }}</span>
                          </a>
                        </li>            
                    @endif
                  </li>
                  <hr class="dropdown-divider">
                  <li>
                    
                      <form action="/logout" method="post">
                      @csrf
                      <button class="dropdown-item btn btn-outline-danger"type="submit">Logout</button>
                      </form>
                    
                  </li>
              </li>
              @endauth

              
            </ul>
          </li>
          
          <button class="btn btn-outline-danger"><i class="navbar-item bi bi-bag-check-fill"></i> Carrello</button>
        </ul>
        
      </div>
      
      

    </div>

  </nav>