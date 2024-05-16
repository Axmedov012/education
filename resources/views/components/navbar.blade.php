


<nav class="site-nav mb-5">
    <div class="pb-2 top-bar mb-3">
      <div class="container">
        <div class="row align-items-center">

        </div>
      </div>
    </div>
    <div class="sticky-nav js-sticky-header">
      <div class="container position-relative">
        <div class="site-navigation text-center">

          <ul class="js-clone-nav d-none d-lg-inline-block site-menu">
            <li class="active"><a href="{{route('home.page')}}">Home</a></li>

            <li><a href="{{route('staff.page')}}">Our Staff</a></li>
            <li><a href="{{route('news.page')}}">News</a></li>
            <li><a href="{{route('gallery.page')}}">Gallery</a></li>
            <li><a href="{{route ( 'about.page' ) }}">About</a></li>
            <li><a href="{{route ('contact.page') }}">Contact</a></li>
          </ul>

          @auth
          @if (auth()->user())
          <a href="{{route('logout')}}" class="btn-book btn btn-secondary btn-sm menu-absolute">Chiqish</a>
          @endauth

          @else
            <a href="{{route('login')}}" class="btn-book btn btn-secondary btn-sm menu-absolute">Kirish</a>
        @endif
      </div>

               @auth
                 @if (auth()->user()->role->name == 'admin')
                   <a href="{{route('dashboard')}}" class="text-white btn-book btn btn-secondary btn-sm menu-absolute">Admin</a>
                @endif
              @endauth

        </div>
    </div>
  </nav>
