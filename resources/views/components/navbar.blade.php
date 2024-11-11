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
          <form action="/logout" method="post">
            @csrf
            <button type="submit">Logout</button>
          </form>
          @if (Auth::user()->is_revisor)
          
            <li class="nav-item">
              <a href=" {{ route('revisor.index')}}" class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25">Zona revisore
                {{-- <span class="position-absolute.top-0.start-100.translate-middle.badge.rounded-pill.bg-danger">{{ App\Models\Article::toBeRevisedCount() }}</span> --}}
            </a>
          </li>
          
          @endif
          @endauth    
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Altro
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('create.article')}}">Crea articolo</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie </a>
            <ul class="dropdown-menu">
              @foreach($categories as $category)
                  <li><a href="{{route('byCategory', ['category'=>$category])}}" class="dropdown-item text-capitalize">{{$category->name}}</a></li>
                  @if (!$loop->last)
                    <hr class="dropdown-divider">
                  @endif
              @endforeach
            </ul>
            

        </ul>
        
      </div>
      
    </div>
  </nav>