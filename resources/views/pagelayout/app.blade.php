<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
  
      <title>Chanjo</title>
  
      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
       <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
      
  
      <!-- Scripts -->
    
      <link  href="{{asset('build/assets/app.css')}}" rel="stylesheet" >
      <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
      
      @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>
  <body>
      <div id="app">
          <nav class="navbar navbar-expand-md navbar-light ">
              <div class="container">
                  <a class="navbar-brand" href="{{ url('/') }}">
                     Chanjo
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                      <span class="navbar-toggler-icon"></span>
                  </button>
  
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <!-- Left Side Of Navbar -->
                      <ul class="navbar-nav me-auto">
  
                      </ul>
  
                      <!-- Right Side Of Navbar -->
                      <ul class="navbar-nav ms-auto">
                          <!-- Authentication Links -->
                          @guest
                              @if (Route::has('login'))
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                  </li>
                              @endif
  
                              @if (Route::has('register'))
                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                  </li>
                              @endif
                          @else
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }}
                                  </a>
  
                                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>
  
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                          @endguest
                      </ul>
                  </div>
              </div>
          </nav>
  
    
      
  
   <div>
      @yield('pagecontent')
  </div>

   <!-- Footer -->

    <footer class="pt-3 text-primary bg-info">
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

        <div class="col-md-3 col-12 text-center order-3 border-end border-dark">
          <h5 class="text-primary text-white display-5 fw-bold">About</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a
                href="/aboutus"
                class="nav-link p-0 text-dark fs-5 fw-semibold"
                >About us</a
              >
            </li>
            <li class="nav-item mb-2">
              <a
                href="faqs"
                class="nav-link p-0 text-dark fs-5 fw-semibold"
                >FAQ</a
              >
            </li>
            <li class="nav-item mb-2">
              <a
                href="../contact us.html"
                class="nav-link p-0 text-dark fs-5 fw-semibold"
                >Contact Us</a
              >
            </li>
          </ul>
        </div>

        <div class="col-md-3 col-12 text-center order-4 border-end border-dark">
          <h5 class="text-primary text-white display-5 fw-bold">More</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2">
              <a href="/termsconditions" class="nav-link p-0 text-dark fs-4 fw-semibold">
                Terms & Conditions
              </a>
            </li>
            <li class="nav-item mb-2">
              <a href="/privacypolicy" class="nav-link p-0 text-dark fs-4 fw-semibold">
                Privacy Policy
              </a>
            </li>
          </ul>
        </div>

        <div
          class="col-md-3 col-12 text-white d-flex justify-content-center order-1 order-md-last"
        >
          <img src="../Images/LOGO2.png" alt="" />
        </div>
      </div>

      <div
        class="d-flex flex-md-row flex-column justify-content-between py-4 mt-4 px-5 mx-0 border-1 border-top border-dark bg-primary w-100"
      >
        <h4 class="text-white text-center align-self-center fw-semibold">
          © CH●AN●JO. ALL RIGHTS RESERVED
        </h4>
        <ul
          class="list-unstyled d-flex fs-2 gap-md-4 d-flex justify-content-center"
        >
          <li class="ms-3 text-center align-self-center text-white">
            <h4 class="d-none d-sm-block">FOLLOW US</h4>
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
    

  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>