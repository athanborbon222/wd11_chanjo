<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />

    <!-- Scripts -->
   <link  href="{{asset('build/assets/app.css')}}" rel="stylesheet" >
   
     <link rel="stylesheet" href="{{asset('css/master.css')}}"/>


</head>
<body>

  <div id="page-content-wrapper">
    <nav
      class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4"
    >
      <div class="d-flex align-items-center">
        <i
          class="fas fa-align-left primary-text fs-4 me-3"
          id="menu-toggle"
        ></i>
        <h2 class="fs-2 m-0">Dashboard</h2>
      </div>

      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown me-5">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }}</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Settings</a></li>
              <li> <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 @csrf
             </form></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  
<div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      <div class="bg-white" id="sidebar-wrapper">
        <div
          class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"
        >
          <img src="../public/images_logo/LOGO2.png" alt="" />
        </div>
        <div class="list-group list-group-flush my-3">
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent second-text active"
            ><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>

          <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
            <i class="fas fa-chart-line me-2"></i>Analytics</a>
          <a
            href="/reports"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-paperclip me-2"></i>Reports</a
          >
          <a
            href="/StoreManagement"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-shopping-cart me-2"></i>Store Mng</a
          >
          <a
            href="/product"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-gift me-2"></i>Products</a
          >
          {{-- <a
            href=""
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-comment-dots me-2"></i>Contact Us</a
          > --}}

          <a
            href="/ManagePage"
            class="list-group-item list-group-item-action bg-transparent text-dark fw-bold"
            ><i class="fa-solid fa-file"></i>  Manage Pages</a
          >
        </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div>
   @yield('content')
      </div>
   
      </div>

   
    <!-- /#page-content-wrapper -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script>
      var el = document.getElementById("wrapper");
      var toggleButton = document.getElementById("menu-toggle");

      toggleButton.onclick = function () {
        el.classList.toggle("toggled");
      };
    </script>
 
</body>
</html>