<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    <a class="navbar-brand">MioSito</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link

          @if(Route::currentRouteName() == 'home')
           active
          @endif

           " aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link
          @if(Route::currentRouteName() == 'about')
           active
          @endif
          " href="{{route('about')}}">Chi Siamo?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link
          @if(Route::currentRouteName() == 'services')
           active
          @endif
          " href="{{route('services')}}">I nostri servizi</a>
        </li>

      </ul>
    </div>
    </div>
 </nav>