<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <title>Scholar - Online School HTML5 Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

</head>

<body>

<!-- ***** Preloader Start ***** -->
{{--<div id="js-preloader" class="js-preloader">--}}
{{--    <div class="preloader-inner">--}}
{{--        <span class="dot"></span>--}}
{{--        <div class="dots">--}}
{{--            <span></span>--}}
{{--            <span></span>--}}
{{--            <span></span>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('user.home') }}" class="logo">
                        <h5 class="text-white">Kreativ pedagog</h5>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                        <form id="search" action="#">
                            <input type="text" placeholder="Qidirish..." id='searchText' name="searchKeyword"
                                   onkeypress="handle"/>
                            <i class="fa fa-search"></i>
                        </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{ route('user.home') }}#top" class="active">Bosh sahifa</a></li>
                        <li class="scroll-to-section"><a href="{{ route('user.home') }}#services">Darsliklar</a></li>
                        <li class="scroll-to-section"><a href="{{ route('user.home') }}#courses">Bo'limlar</a></li>
                        <li class="scroll-to-section"><a href="{{ route('user.home') }}#team">Jamoa</a></li>
                        <li class="scroll-to-section"><a href="{{ route('user.home') }}#contact">Bog'lanish</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->






@yield('section')







<footer>
    <div class="container">
        <div class="col-lg-12">
            <p>Copyright © <script>document.write(new Date().getFullYear());</script> Barcha huquqlar himoyalangan. &nbsp;&nbsp;&nbsp; Developed by: <a
                    href="https://t.me/Samandar_developer" rel="nofollow" target="_blank">Samandar Sariboyev</a></p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/isotope.min.js') }}"></script>
<script src="{{ asset('js/owl-carousel.js') }}"></script>
<script src="{{ asset('js/counter.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
@yield('js')

</body>
</html>
