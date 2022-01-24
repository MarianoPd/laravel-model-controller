

<header>
    <div class="container py-5">
        <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link {{(Route::currentRouteName()==='home')? 'active' : ''}}" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link{{(Route::currentRouteName()==='about')? 'active' : ''}}" href="{{route('about')}}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link{{(Route::currentRouteName()==='contacts')? 'active': ''}}" href="{{route('contacts')}}">Contacts</a>
            </li>
            <li class="nav-item">
              <a class="nav-link{{(Route::currentRouteName()==='movies')? 'active': ''}}" href="{{route('movies')}}">Movies</a>
            </li>
            
          </ul>
    </div>
</header>