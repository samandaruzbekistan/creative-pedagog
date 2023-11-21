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
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
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
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
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
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>BARCHASI TA'LIM UCHUN</h5>
                            <h1>Kreativ <br>
                                Pedagog</h1>
                            <p>Saytimizda ta'lim uchun testlar, darsliklar, maqolalar, dasturlar, topshiriqlar, turli rebuslar, metodlar, videodarslar va taqdimotlar joy olgan</p>
                            <a href="#" class="btn_1">Kurslarni ko'rish </a>
                            <a href="#" class="btn_2">Mualliflar </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>Ajoyib <br> Imkoniyat</h2>
                        <p>Siz saytimizga o'z hissangizni qo'shishni istasangiz bizga materiallaringizni yuboring </p>
                        <a href="#" class="btn_1">Mualliflar</a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4>Taqdimotlar</h4>
                            <p>Professional darajada tayyorlangan mavzulashtirilgan taqdimotlarni yuklab oling</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>Topshiriqlar</h4>
                            <p>Turli murakkablikdagi topshiriqlar (mantiqiy, matematik) va rebuslar</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4>Darsliklar</h4>
                            <p>Maktab, xorij, oliy ta'lim darsliklari va videodarslar joylangan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="img/learning_img.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>Biz haqimizda</h5>
                        <h2>O'qib o'rganing
                        biz bundan hursand bo'lamiz</h2>
                        <p>Websaytdan joy olgan barcha materiallar mualliflar tomonidan tayyorlangan va mualliflik huqiqi mavjud.</p>
                        <ul>
                            <li><span class="ti-pencil-alt"></span>Barcha materiallar litsenziyalangan
                            </li>
                            <li><span class="ti-ruler-pencil"></span>Materiallarni boshqa joyda chop etsangiz saytga havola qoldiring
                            </li>
                        </ul>
                        <a href="#" class="btn_1">Darsliklar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">1024</span>
                        <h4>Ustozlar</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">1960</span>
                        <h4>Talabalar</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">1020</span>
                        <h4>O'quvchilar</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">820</span>
                        <h4>Mustaqil izlanuvchilar</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Darsliklar</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_1.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Darsliklar</a>
                            <h4>Tekin</h4>
                            <a href="course-details.html"><h3>Maktab darsliklari</h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_1.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_2.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Darsliklar</a>
                            <h4>Tekin</h4>
                            <a href="course-details.html"><h3>Xorij darsliklari </h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_2.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="img/special_cource_3.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4">Darsliklar</a>
                            <h4>Tekin</h4>
                            <a href="course-details.html"><h3>Oliy talim darsliklari</h3></a>
                            <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_3.png" alt="">
                                    <div class="author_info_text">
                                        <p>Conduct by:</p>
                                        <h5><a href="#">James Well</a></h5>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- learning part start-->
    <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h5>Advance feature</h5>
                        <h2>Our Advance Educator
                            Learning System</h2>
                        <p>Fifth saying upon divide divide rule for deep their female all hath brind mid Days
                            and beast greater grass signs abundantly have greater also use over face earth
                            days years under brought moveth she star</p>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <h4>Learn Anywhere</h4>
                                    <p>There earth face earth behold she star so made void two given and also our</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-stamp"></span>
                                    <h4>Expert Teacher</h4>
                                    <p>There earth face earth behold she star so made void two given and also our</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="img/advance_feature_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!--::review_part start::-->
    <section class="testimonial_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Happy Students</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_2.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_3.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>Our Blog</p>
                        <h2>Students Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_1.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Design</a>
                                <a href="blog.html">
                                    <h5 class="card-title">Dry beginning sea over tree</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li><span class="ti-comments"></span>2 Comments</li>
                                    <li><span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_2.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Developing</a>
                                <a href="blog.html">
                                    <h5 class="card-title">All beginning air two likeness</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li><span class="ti-comments"></span>2 Comments</li>
                                    <li><span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4 col-xl-4">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="img/blog/blog_3.png" class="card-img-top" alt="blog">
                            <div class="card-body">
                                <a href="#" class="btn_4">Design</a>
                                <a href="blog.html">
                                    <h5 class="card-title">Form day seasons sea hand</h5>
                                </a>
                                <p>Which whose darkness saying were life unto fish wherein all fish of together called</p>
                                <ul>
                                    <li><span class="ti-comments"></span>2 Comments</li>
                                    <li><span class="ti-heart"></span>2k Like</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/logo.png" alt=""> </a>
                        <p>But when shot real her. Chamber her one visite removal six
                            sending himself boys scot exquisite existend an </p>
                        <p>But when shot real her hamber her </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
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
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> Hath of it fly signs bear be one blessed after </p>
                            <p><span> Phone :</span> +2 36 265 (8060)</p>
                            <p><span> Email : </span>info@colorlib.com </p>
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
                                    All rights reserved | This template is made with <i class="ti-heart"
                                                                                        aria-hidden="true"></i> by <a
                                        href="https://colorlib.com" target="_blank">Colorlib</a>
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
