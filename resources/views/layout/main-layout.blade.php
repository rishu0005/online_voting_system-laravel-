<!DOCTYPE html>
<html lang="en">
<head>
 <title>@yield('title', 'Online Voting System')</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
  
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

     <!-- Bootstrap Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">

    

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    @yield('style-code')
</head>
<body>
   
    <!-- SHow this sidebar if user is logged in -->
    @if (Auth::check())
     <!-- Sidebar -->
 <div class="sidebar col-md-3 col-lg-2 d-md-block">
  <div class="text-center mb-4">
     
      <img src="" alt="logo" class="img-fluid">
  </div>
  <ul class="nav flex-column">
      <li class="nav-item ">
          <a class="nav-link  {{ request()->is('dashboard') || request()->is('/') ? 'active' : 'inactive' }}" href="{{ route('adminDashboardPage') }}">
              <i class="bi bi-house-door"></i>
              <span>Dashboard</span>
          </a>
      </li> 
      
      <li class="nav-item">
          <a class="nav-link {{ request()->is('election*') ? 'active' : 'inactive' }} " href="{{ route('electionPage') }}">
              <i class="bi bi-card-checklist"></i>
              <span>Elections</span>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link {{ request()->is('voter*') ? 'active' : 'inactive' }} " href="{{ route('voterPage') }}">
              <i class="bi bi-card-checklist"></i>
              <span>Voters</span>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link {{ request()->is('notice*') ? 'active' : 'inactive' }} " href="{{ route('noticePage') }}">
              <i class="bi bi-card-checklist"></i>
              <span>Notice Page</span>
          </a>
      </li>
      

      {{-- <li class="nav-item">
          <a class="nav-link" href="{{ route('candidates') }}">
              <i class="bi bi-people"></i>
              <span>Candidates</span>
          </a>
      </li>


      <li class="nav-item">
          <a class="nav-link" href="{{ route('result') }}">
              <i class="bi bi-bar-chart"></i>
              <span>Results</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('notice-page') }}">
            <i class="bi bi-card-checklist"></i>
            <span>Notice Page</span>
        </a>
    </li> --}}
      {{-- <li class="nav-item">
          <a class="nav-link" href="#">
              <i class="bi bi-gear"></i>
              <span>Settings</span>
          </a>
      </li> --}}
      <li class="nav-item mt-5">
        <a class="nav-link text-danger" href="{{ route('logout') }}">
            <i class="bi bi-box-arrow-right"></i>
              <span>Logout</span>
          </a>
      </li>
  </ul>
</div>
          {{-- <nav class="navbar navbar-expand-sm bg-success border-bottom  ">

        <div class="container-fluid d-flex px-4 align-items-center justify-content-between">
          <!-- Links -->
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link fs-5 text-warning" href="">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning fs-5" href="">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-warning fs-5" href="">Contact</a>
            </li>

        </ul>
        <ul class="list-unstyled">
            <li class="text-right">
              <form action="{{ route('logout') }}" method="post">
                @csrf
            <input type="submit" value="Log Out" class="btn btn-danger">

                
              </form>
            
        </li>
        </ul>
        
        </div>
      
      </nav>   --}}
    @endif

<main>
    @yield('content')
</main>


<!--Bootstrap Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>        

<!--Jquery CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    @yield('script-code')

</body>
</html>    