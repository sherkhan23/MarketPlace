
<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="/">
              <h3 class="fs-3 text-muted">Market Place</h3>
            </a>

              <div class="navbar-collapse d-flex justify-content-start w-50" id="">
                  <a class="nav-link border rounded text-black" id="catalog" href="/"> <i class="bi bi-list"></i> Каталог</a>
              </div>

                <div class="navbar-collapse d-flex justify-content-start ">
                    <div id="navbar-search-autocomplete" class="form-outline">
                        <input type="search" id="search_main" class="form-control pt-2 pb-2" placeholder="Хочу найти" />
                    </div>
                    <button type="button" class="btn btn-primary h-50 pt-2 pb-2">
                        <i class="bi bi-search "></i>
                    </button>
                </div>
            <!--  -->


          <div class="navbar-collapse d-flex justify-content-end">
              <ul class="navbar-nav" id="navbar-links">
                  <li class="nav-item" >
                      <a class="nav-link" href="/"><i class="bi bi-cart-check" style="font-size: 29px"></i>
                      </a>
                  </li>
              </ul>
              <ul class="navbar-nav" id="navbar-links">

                  <li class="nav-item">
                      <a class="nav-link" href="/">Главное</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="">Товары</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="">О нас</a>
                  </li>
              </ul>
          </div>


      </div>

      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="d-flex align-items-center">

          <div class="text-muted">

              @if(session('cart'))
                  <a href="{{ url('cart') }}"> <span class="d-flex mr-3"><i id="like-cart" class="bi bi-bag-heart" style="font-size: 22px;"></i></span>
                      <!-- this code count product of choose tha user choose -->
                      <span class="badge badge-pill badge-danger ml-3">{{ count(session('cart')) }}</span>
                  </a>
          </div>
          @endif

      </div>



        <!-- Avatar -->

        <div class="dropdown">
          <button class="btn dropdown-toggle text-primary" type="button" id="dropdownMenu3" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
              @auth("web")

                  {{ Auth::user()->name }}

{{--                  @foreach($users as $user)--}}
{{--                      {{ $user->name }}--}}
{{--                  @endforeach--}}
              @endauth
                  @guest("web")
                      Вход
                  @endguest
              <i class="bi bi-box-arrow-in-right"></i>
          </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu3">

    <h6 class="dropdown-header">Welcome to MarketPlace

    </h6>
      @auth("web")
          <a class="dropdown-item" href="{{ route('profile') }}">Профиль</a>
          <a class="dropdown-item" href="{{ route("logout") }}">Log out</a>
      @endauth

      @guest("web")
          <a class="dropdown-item" href="{{ route("login") }}">Login</a>
          <a class="dropdown-item" href="{{ route("register") }}">Register</a>
      @endguest

  </div>
</div>


      </div>


    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
