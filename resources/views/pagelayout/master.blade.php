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
            ><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a
          >

          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-chart-line me-2"></i>Analytics</a
          >
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-paperclip me-2"></i>Reports</a
          >
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-shopping-cart me-2"></i>Store Mng</a
          >
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-gift me-2"></i>Products</a
          >
          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent second-text fw-bold"
            ><i class="fas fa-comment-dots me-2"></i>Chat</a
          >

          <a
            href="#"
            class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"
            ><i class="fas fa-power-off me-2"></i>Logout</a
          >
        </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div>
   @yield('content')
      </div>
   
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