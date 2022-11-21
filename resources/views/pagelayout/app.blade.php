<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Chanjo</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com" />
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />

    <!-- Scripts -->

    <link href="{{secure_asset('build/assets/app.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <script
      src="https://kit.fontawesome.com/9a1cac315a.js"
      crossorigin="anonymous"
    ></script>
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-expand-lg  d-flex flex-row justify-content-center">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
          <img src="/Images/LOGO2.png" style="width: 50%" alt="">

          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto px-0 mx-2">
              <li class="nav-item mx-2">
                <a class="nav-link " href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link " href="userproducts/index"
                  >Products</a
                >
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link " href="/aboutus"
                  >About Us</a
                >
              </li>
            </ul>
            <div class="d-flex flex-lg-grow-1 px-3 my-2">
              <form class="d-flex px-3 my-2 w-100">
                <input
                  class="form-control me-2 text-dark"
                  type="text"
                  placeholder="What are you looking for?"
                />
                <button 
                 
                  class="btn btn-sm b text-dark fw-semibold SearchBtn"
                  type="button"
                >
                  Search
                </button>
              </form>
            </div>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
              <!-- Authentication Links -->
              @guest @if (Route::has('login'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}"
                  >{{ __('Login') }}</a
                >
              </li>
              @endif @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}"
                  >{{ __('Register') }}</a
                >
              </li>
              @endif @else
              <li class="nav-item dropdown">
                <a
                  id="navbarDropdown"
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  v-pre
                >
                  {{ Auth::user()->name }}
                </a>

                <div
                  class="dropdown-menu dropdown-menu-end"
                  aria-labelledby="navbarDropdown"
                >

                <a class="dropdown-item" href="{{url('/profile')}}">
                    My Account
                </a>


                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form
                    id="logout-form"
                    action="{{ route('logout') }}"
                    method="POST"
                    class="d-none"
                  >
                    @csrf
                  </form>
                  <a class="mx-3" href="/cart">
                  cart
                  </a>
                </div>
                
              </li>
              
              @endguest
            </ul>
              
          </div>
        </div>
      </nav>
      <script src="{{secure_asset('build/assets/app.js')}}"></script>
      <div>@yield('pagecontent')</div>

      <!-- Footer -->

    <footer style="background-color: aquamarine" class="pt-3 text-primary  ">
      <div class="row g-0">
        <div
          class="col-md-3 col-12 text-center text-white order-2 ps-3 border-end border-dark"
        >
          <h5 class="display-5 fw-bold">Discover</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a
                href="/userproducts/index"
                class="nav-link p-0 text-dark fs-4 fw-semibold"
                >Products</a
              >
            </li>
          </ul>
        </div>

          <div
            class="col-md-3 col-12 text-center order-3 border-end border-dark"
          >
            <h5 class="text-primary text-white display-5 ">About</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a
                  href="/aboutus"
                  class="nav-link p-0 text-dark fs-5 fw-semibold"
                  >About us</a
                >
              </li>
              <li class="nav-item mb-2">
                <a href="faqs" class="nav-link p-0 text-dark fs-5 fw-semibold"
                  >FAQ</a
                >
              </li>
              <li class="nav-item mb-2">
                <a
                  href="/contactus"
                  class="nav-link p-0 text-dark fs-5 fw-semibold"
                  >Contact Us</a
                >
              </li>
            </ul>
          </div>

          <div
            class="col-md-3 col-12 text-center order-4 border-end border-dark"
          >
            <h5 class="text-primary text-white display-5 ">More</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a
                  href="/termsconditions"
                  class="nav-link p-0 text-dark fs-4 fw-semibold"
                >
                  Terms & Conditions
                </a>
              </li>
              <li class="nav-item mb-2">
                <a
                  href="/privacypolicy"
                  class="nav-link p-0 text-dark fs-4 fw-semibold"
                >
                  Privacy Policy
                </a>
              </li>
            </ul>
          </div>

          <div
            class="col-md-3 col-12 text-white d-flex justify-content-center order-1 order-md-last"
          >
            <img src="/Images/LOGO2.png" alt="" />
          </div>
        </div>

        <div
          style="
            background-color: rgb(252, 205, 97);
            background-color: rgb(252, 205, 97);
          "
          class="d-flex flex-md-row flex-column justify-content-between py-4 mt-4 px-5 mx-0 border-1 border-top border-dark w-100"
        >
          <h4 class="text-dark text-center align-self-center fw-semibold">
            © CH●AN●JO. ALL RIGHTS RESERVED
          </h4>
          <ul
            class="list-unstyled d-flex fs-2 gap-md-4 d-flex justify-content-center"
          >
            <li class="ms-3 text-center align-self-center text-dark">
              <h4 class="d-none d-sm-block my-3">FOLLOW US</h4>
            </li>
            <li class="ms-3">
              <a class="text-dark" href="#"><i class="bi bi-instagram"></i></a>
            </li>
            <li class="ms-3">
              <a class="text-dark" href="#"><i class="bi bi-twitter"></i></a>
            </li>
            <li class="ms-3">
              <a class="text-dark" href="#"><i class="bi bi-facebook"></i></a>
            </li>
          </ul>
        </div>
      </footer>

      <!-- Footer -->

      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"
      ></script>
    </div>
  </body>
</html>
