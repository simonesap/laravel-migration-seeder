<h1 class="text-center m-3 text-uppercase text-primary">Boolean station</h1>

<header>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active {{Request::route()->getName() == 'home' ? 'active' : ''}} " aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{Request::route()->getName() == 'index' ? 'active' : ''}}" href="{{route('index')}}">Trains</a>
              </li>
              {{--
              <li class="nav-item">
                <a class="nav-link {{Request::route()->getName() == 'contacts' ? 'active' : ''}}" href="{{route('contacts')}}">Contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{Request::route()->getName() == 'houses' ? 'active' : ''}}" href="{{route('index')}}">Houses</a>
              </li> --}}
            </ul>
          </div>
        </div>
      </nav>
</header>
