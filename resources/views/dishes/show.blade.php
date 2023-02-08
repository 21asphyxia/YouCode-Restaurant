<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @vite(['resources/css/bootstrap.min.css','resources/css/animate.min.css', 'resources/css/default.css', 'resources/css/style.css','resources/css/responsive.css','resources/css/fontawesome-all.min.css'])

    </head>
    <body>
            <!-- header -->
    <header class="header-area">  
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="navbar-brand logoo mr-md-5">
                <a href="/"><img src="/images/logo/logo.png" width="" alt="logo"></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="text-center py-4 py-md-0">
                    <li class="has-sub">
                        <a href="/">Home</a>
                    </li>
                </ul>
                @if (Route::has('login'))
                            <div class="d-flex justify-content-center">
                            @auth
                                <div>
                                    <a href="{{ url('/dashboard') }}" class="btn ss-btn">Dashboard</a>
                                </div>
                            @else
                                <div class="mr-5">
                                    <a href="{{ route('login') }}" class="btn ss-btn">Login</a>
                                </div>
                            @if (Route::has('register'))
                                <div>
                                    <a href="{{ route('register') }}" class="btn ss-btn">Register</a>
                                </div>
                            @endif
                            @endauth
                            </div>
                            @endif
            </div>
          </nav>
    </header>
    <!-- header-end -->
    <main>
        <section class="project-detail">
            <div class="container">
                <div class="lower-content">
                    <div class="row">
                        <div class="text-column col-lg-8 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <!-- Upper Box -->
                                <div class="upper-box">
                                    <div class="single-item-carousel owl-carousel owl-theme">
                                    <figure class="image"><img src="{{'/images/'.$dish->image}}" alt=""></figure>                
                                    </div>
                                </div>
                                <h2>{{$dish->name}}</h2>
                                <p>{{$dish->description}}</p>
                            </div>
                        </div>

                        <div class="info-column col-lg-4 col-md-12 col-sm-12">
                            <div class="inner-column">
                                <h3>{{ $dish->name}}</h3>
                                <p>Informations about the dish :</p>
                                <ul class="project-info clearfix">
                                    <li>
                                        <span class="icon fa fa-user"></span>
                                        <strong>Chef</strong>
                                        <p>YouCode</p>
                                    </li>
                                    <li>
                                        <span class="icon fa fa-calendar-alt"></span>
                                        <strong>Day</strong>
                                        <p>{{$dish->day}}</p>
                                    </li>
                                    <li>
                                        <span class="icon fa fa-paper-plane"></span>
                                        <strong>Location</strong>
                                        <p>Youcode, Youssofia</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--End Project Detail -->
    </main>
    <footer class="footer-bg footer-p">
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">                         
                        YouCode © 2020
                    </div>
                    <div class="col-lg-6 text-right text-xl-right">                       
                        <ul>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Term &amp; Conditions</a></li>
                            <li><a href="#">Legal</a></li>
                            <li> <span class="footer-social">                                    
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </span></li>
                        </ul>                 
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <script src="{{ "/".asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ "/".asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ "/".asset('js/popper.min.js') }}"></script>
    <script src="{{ "/".asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>