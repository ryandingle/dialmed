<?php 
$route = Route::currentRouteName();
$list = 'verification password register login home about services contact gallery blog blog.show';
if(strpos($list, $route) !== false):
?>

<div class="top-bar">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <p>Welcome To Our DialMed & Research Center</p>
      </div>
      <div class="col-sm-6">
        <div class="social-icons"> <a href="#."><i class="fa fa-facebook"></i></a> <a href="#."><i class="fa fa-twitter"></i></a> <a href="#."><i class="fa fa-dribbble"></i></a> <a href="#."><i class="fa fa-instagram"></i></a> </div>
      </div>
    </div>
  </div>
</div>

<!-- Header -->
<header class="header-style-2">
  <div class="container">
    <div class="logo"> 
      <a href="{{ route('home') }}">
        <!-- <img src="/images/logo.png" alt=""> -->
        <h3>DialMed</h3>
      </a> 
    </div>
    <div class="head-info">
      <ul>
        <li> <i class="fa fa-phone"></i>
          <p>1111 222 33333<br>
            9-820-323-Hello</p>
        </li>
        <li> <i class="fa fa-envelope-o"></i>
          <p>hello@dialmed.com<br>
            info@dialmed.com</p>
        </li>
        <li> <i class="fa fa-map-marker"></i>
          <p>PO Box 16122 Collins Street West <br>
            Victoria 8007 Australia</p>
        </li>
      </ul>
    </div>
  </div>
  
  <!-- Nav -->
  <nav class="navbar ownmenu">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-open-btn" aria-expanded="false"> <span><i class="fa fa-navicon"></i></span> </button>
      </div>
      
      <!-- NAV -->
      <div class="collapse navbar-collapse" id="nav-open-btn">
        <ul class="nav">
          <li><a href="{{ route('home') }}">Home </a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('services') }}">Services</a></li>
          <li><a href="{{ route('gallery') }}">Gallery </a></li>
          <li><a href="{{ route('blog') }}">Blog </a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- End Header --> 

<?php else:?>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
  <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">

          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>

<?php endif;?>