<nav class="navbar navbar-expand-lg navbar-customclass shadow p-3 rounded">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homepage')}}">Bazaar shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('homepage')}}">Home</a>
          </li>
          <li>
            <a class="nav-link" href="{{route('article.index')}}">Tutti gli articoli</a>
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
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Menu dell'utente
            </a>
            <ul class="dropdown-menu navbar-customclass">
              <li><a class="dropdown-item" href="{{route('create.article')}}">Crea articolo</a></li>
              <hr class="dropdown-divider">
              <li>
                @if (Auth::user()->is_revisor)  
                    <li class="dropdown-item">
                      <a href=" {{ route('revisor.index')}}" class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25">Zona revisore
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{ \App\Models\Article::toBeRevisedCount() }}</span>
                      </a>
                    </li>            
                @endif
              </li>
              <hr class="dropdown-divider">
              <li>
                
                  <form action="/logout" method="post" class="dropdown-item">
                  @csrf
                  <button class="btn btn-outline-danger" type="submit">Logout</button>
                  </form>
                
              </li>
            </ul>
          </li>
          @endauth

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
          
        </ul>
        
      </div>
      
      {{-- BARRA DI RICERCA --}}
      <form action="{{route('article.search')}}" class="d-flex ms-auto" role="search" method="GET">
        <div class="input-group">
          <input type="search" name="query" class="form-control" placeholder="search" aria-label="search">
          <button type="submit" class="input-group-text btn btn-outline-success" id="basic-addon2"> Search </button>
        </div>
      </form>

    </div>

  </nav>