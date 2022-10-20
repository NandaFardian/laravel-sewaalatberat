<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="shop, ecommerce, store, multipurpose, shopify, woocommerce, html5, css3, sass">



    <!-- fav -->
  
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- title -->
    <title>Penyewaan Alat Berat</title>

    <!-- stylesheets -->
    <link rel="stylesheet" href="{{asset('assets2/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/vendor/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/vendor/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/vendor/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/vendor/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/mean-menu.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('assets2/css/style.css')}}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"> --}}
</head>

<body>

    <header>
        <div class="header-area header-resposive pt-30">
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <div class="main-menu">
                    
                  
                    
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      @guest
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/beranda">Beranda</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/kategori">Kategori</a>
                      </li>                                             
                      <li class="nav-item">
                        <a class="nav-link" href="/sewa-user">Sewa</a>
                      </li>
                      @else 
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/beranda">Beranda</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/kategori">Kategori</a>
                      </li>                                             
                      <li class="nav-item">
                        <a class="nav-link" href="/bayar">Bayar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/riwayat">Riwayat Sewa</a>
                      </li>
                      @endguest                                                                                                                                                                                   
                    </ul> 
                    </div>
                    
                
                    <div class="topbar-divider d-none d-sm-block"></div>
                    @auth
                        <li class="nav-item dropdown no-arrow">
                        <a class="nav-link" id="userDropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @guest
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b>0</b></span>
                            @else
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><b>{{ Auth::user()->name }}</b></span>
                            @endguest
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            </form>
                                
                            {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a> --}}
                        </div>
                    </li>
                    @endauth
                    @guest
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" aria-current="page" href="/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/register">Register</a>
      </li>                                                                                
    </ul>

    @else
    @endguest
                  </div>
                </div>
              </nav>
            

        </div>
    </header>

    @yield('content')
    
    <!-- ================= Brand Area Starts ================= -->

    <!-- ================= Footer Area Starts ================= -->
    <footer class="footer-area footer-area-2">
        <div class="footer-menu pt-40 pb-40">
            <div class="container">
                    <div class="text-center">
                        <div class="footer-widget">
                            <h4>Contact Us</h4>
                            <ul class="footer-info">
                            <i class="fas fa-map-marker-alt"> Jln. Meulaboh Tapak Tuan</i><br>
                            <i class="fab fa-instagram"> alatberatdarulmakmur</i><br>
                            <i class="far fa-envelope"> cv.yoyonalatberat.com</i>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
        <div class="footer-bottom pt-25">
            <div class="container">
                <div class="copyright d-inline-block">
                    <p>CopyRight ©2022 Design by <b> Nanda Fardian</b></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- ================= Footer Area Ends ================= -->

    <!-- scripts -->
    <script src="{{asset('assets2/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('assets2/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets2/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets2/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets2/js/vendor/jquery-mean-menu.min.js')}}"></script>
    <script src="{{asset('assets2/js/vendor/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets2/js/vendor/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets2/js/countdown.js')}}"></script>
    <script src="{{asset('assets2/js/vendor/jquery.nice-number.js')}}"></script>  
    <script src="{{asset('assets2/js/vendor/slick.min.js')}}"></script>
    <script src="{{asset('assets2/js/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets2/js/vendor/wow-1.3.0.min.js')}}"></script>  
    <script src="{{asset('assets2/js/main.js')}}"></script>
    {{-- <script src="https://cdn.jsddelivr.net/npm/bootstrap@5.2.0-betal/dist/js/bootstrap.bundle.min.js"></script> --}}
    @yield('Script')
</body>

</html>