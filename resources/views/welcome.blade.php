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
                    <a href="/"><img src="images/logo/logo.png" width="" alt="logo"></a>
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
        
        <!-- main-area -->
        <main>   
           <!-- slider-area -->
            <section id="home" class="d-flex align-items-center" style="background: url({{ '/images/slider/slider_img02.jpg)' }} no-repeat;background-size: cover; background-position: center top;height:80vh;">
                <div class="container my-auto">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="mt-0 slider-content text-center">
                                <h5 class="animate" data-animation="fadeInDown" data-delay=".4s">WELCOME</h5>
                                <h2 class="animate" data-animation="fadeInUp" data-delay=".4s">This is<br><strong>YouCode's Restaurant Website</strong></h2>         
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->             
            <!-- gallery-area -->
            <section id="work" class="pt-40 pb-70" style="background: url({{ '/images/bg/aliment-right2.png' }}) no-repeat; background-position: right center;">
                <div class="container">   
                    <div class="row">   
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center">
                                 <h2>Our best dishes</h2>
                            </div>
                        </div>
                    </div>
					<div class="dishes">
                       <div class="row align-items-center mb-50 text-center">                          
                            <div class="col-lg-12">
                                <div class="my-masonry">
                                    <div class="button-group filter-button-group ">
								        <button class="active" data-filter=".monday">Monday</button>
                                        <button data-filter=".tuesday">Tuesday</button>
                                        <button data-filter=".wednesday">Wednesday</button>
                                        <button data-filter=".thursday">Thursday</button>
                                        <button data-filter=".friday">Friday</button>
							        </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid col3">
                            @foreach ($dishes as $dish)
                            @if ($dish->day == 'Monday')
                            <div class="grid-item monday">
                                <a href="{{ route('dishes.show',$dish) }}">
                                    <figure class="gallery-image">
                                    <img src="{{ 'images/' . $dish->image }}" alt="{{ $dish->name }}" class="img">      
                                        <figcaption>
                                            <h4>{{ $dish->name }}</h4>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            @elseif ($dish->day == 'Tuesday')
                            <div class="grid-item tuesday">
                                <a href="{{ route('dishes.show',$dish) }}">
                                    <figure class="gallery-image">
                                    <img src="{{ 'images/' . $dish->image }}" alt="{{ $dish->name }}" class="img">      
                                        <figcaption>
                                            <h4>{{ $dish->name }}</h4>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            @elseif ($dish->day == 'Wednesday')
                            <div class="grid-item wednesday">
                                <a href="{{ route('dishes.show',$dish) }}">
                                    <figure class="gallery-image">
                                    <img src="{{ 'images/' . $dish->image }}" alt="{{ $dish->name }}" class="img">      
                                        <figcaption>
                                            <h4>{{ $dish->name }}</h4>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            @elseif ($dish->day == 'Thursday')
                            <div class="grid-item thursday">
                                <a href="{{ route('dishes.show',$dish) }}">
                                    <figure class="gallery-image">
                                    <img src="{{ 'images/' . $dish->image }}" alt="{{ $dish->name }}" class="img">      
                                        <figcaption>
                                            <h4>{{ $dish->name }}</h4>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            @elseif ($dish->day == 'Friday')
                            <div class="grid-item friday">
                                <a href="{{ route('dishes.show',$dish) }}">
                                    <figure class="gallery-image">
                                    <img src="{{ 'images/' . $dish->image }}" alt="{{ $dish->name }}" class="img">      
                                        <figcaption>
                                            <h4>{{ $dish->name }}</h4>
                                        </figcaption>
                                    </figure>
                                </a>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
             <!-- gallery-area-end -->
        </main>
        <!-- main-area-end -->
        <!-- footer -->
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
        <!-- footer-end -->
    
    
            <!-- JS here -->
            <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
            <script src="{{ asset('js/vendor/jquery-3.6.0.min.js') }}"></script>
            <script src="{{ asset('js/popper.min.js') }}"></script>
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('js/js_isotope.pkgd.min.js') }}"></script>
            <script src="{{ asset('js/imagesloaded.min.js') }}"></script>
            <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
            <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>