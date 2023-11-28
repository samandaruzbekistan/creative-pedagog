<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Etrain</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ route('user.home') }}"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                             id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('user.home') }}">Bosh sahifa</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Darsliklar
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <a class="dropdown-item" href="single-blog.html">Maktab darsliklari</a>
                                        <a class="dropdown-item" href="elements.html">Oliy ta’lim darsliklari</a>
                                        <a class="dropdown-item" href="elements.html">Xorij darsliklari</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Malumotlar
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <a class="dropdown-item" href="single-blog.html">Maqolalar</a>
                                        <a class="dropdown-item" href="elements.html">Taqdimotlar</a>
                                        <a class="dropdown-item" href="elements.html">Xorij darsliklari</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Topshiriqlar
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="single-blog.html">Kreativ topshiriqlar</a>
                                        <a class="dropdown-item" href="elements.html">Mantiqiy topshiriqlar</a>
                                        <a class="dropdown-item" href="elements.html">Matematik rebuslar</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.about') }}">Biz haqimizda</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="#">Maqolalar</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
    </div>
</header>


@yield('section')














<!-- footer part start-->
    <footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-4 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <a href="{{ route('user.home') }}"> <img src="img/logo.png" alt=""> </a>
                    <p>Barcha huquqlar himoyalgan va website uchun litsenziya olingan </p>
                    <p>Har qanday manba boshqa joyda chop etilgan vaqtda manba ko'rsatilishi kerak </p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-4">
                <div class="single-footer-widget footer_2">
                    <h4>Xabar qoldirish</h4>
                    <p>O'z taklif va shikoyatlaringizni qoldiring.
                    </p>
                    <form action="#">
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder='Enter email address'
                                       onfocus="this.placeholder = ''"
                                       onblur="this.placeholder = 'Enter email address'">
                                <div class="input-group-append">
                                    <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="social_icon">
                        <a href="#"> <i class="ti-facebook"></i> </a>
                        <a href="#"> <i class="ti-twitter-alt"></i> </a>
                        <a href="#"> <i class="ti-instagram"></i> </a>
                        <a href="#"> <i class="ti-skype"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-md-4">
                <div class="single-footer-widget footer_2">
                    <h4>Bog'lanish</h4>
                    <div class="contact_info">
                        <p><span> Manzil :</span> Guliston shahar 4-mavze  </p>
                        <p><span> Telefon :</span> +998 97 341 71 75</p>
                        <p><span> Telegram : </span>+998 97 341 71 75 </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="footer-text m-0">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                                Barcha huquqlar himoyalangan | Websaytni ishlab chiquvchi <a
                                    href="https://t.me/Samandar_developer" target="_blank">GOLD APPS</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<!-- jquery -->
<script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
<!-- popper js -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- easing js -->
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('js/swiper.min.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('js/masonry.pkgd.js') }}"></script>
<!-- particles js -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
