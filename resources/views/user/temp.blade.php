@extends('user.header_footer')

@section('section')

    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                            <div class="header-text">
                                <span class="category">Pedagog</span>
                                <h2>Assalomu alaykum. Kreativ Pedagog saytiga xush kelibsiz</h2>
                                <p>
                                    Saytimizda bo'lajak boshlangʻich sinf oʻqituvchilarining kreativ kompetensiyasini
                                    rivojlantirish uchun yaratilgan turli xil QR kodli topshiriqlar, taqdimotlar,
                                    kreativ va tanqidiy fikrlashni oshiruvchi topshiriqlar, xalqaro o'qituvchilarning
                                    metodlari va videodarslari bilan tanishishingiz mumkin.
                                </p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Bo'limlar</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="images/service-01.png" alt="online degrees">
                        </div>
                        <div class="main-content">
                            <h4>Maktab darsliklari</h4>
                            <p>Umumta'lim maktablari o'qivchilar va ustozlar uchun elektron shakldagi darsliklar.</p>
                            <div class="main-button">
                                <a href="{{ route('user.school') }}">O'qish</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="images/service-02.png" alt="short courses">
                        </div>
                        <div class="main-content">
                            <h4>Oliy ta'lim darsliklari</h4>
                            <p>Oliy ta'lim muassasalari talabalari va professor o'qituvchilari uchun elektron
                                darsliklar</p>
                            <div class="main-button">
                                <a href="{{ route('user.academic') }}">O'qish</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="images/service-03.png" alt="web experts">
                        </div>
                        <div class="main-content">
                            <h4>Xorij darsliklari</h4>
                            <p>Xorij darsliklarining o'zbekchaga tarjima qiligan elektron shakladagi nusxasi.</p>
                            <div class="main-button">
                                <a href="#">O'qish</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Taqdimotlar
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Professional</strong> darajada tayyorlangan mavzulashtirilgan taqdimotlarni
                                    yuklab oling
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Kreativ topshiriqlar
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Turli murakkablikdagi topshiriqlar (mantiqiy, matematik) va rebuslar
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Darsliklar
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Maktab, xorij, oliy ta'lim darsliklari va videodarslar joylangan
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    Testlar
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Mavzulashtirilgan test bloklari. Bilimingizni sinab ko'ring
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>Yangilik</h6>
                        <h2>Ajoyib Imkoniyat</h2>
                        <p>Siz saytimizga o'z hissangizni qo'shishni istasizmi? Unday bo'lsa bizga materiallaringizni
                            yuboring.</p>
                        <div class="main-button">
                            <a href="#">Mualliflar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section courses" id="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h2>Bo'limlar</h2>
                    </div>
                </div>
            </div>
            <div class="row event_box">
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="{{ route('user.tests') }}"><img class="img-thumbnail" src="images/course-03.jpg"
                                                                     alt=""></a>
                            <span class="category">Test</span>
                            <span class="price"></span>
                        </div>
                        <div class="down-content">
                            <span class="author">Barchasi</span>
                            <h4>Testlar</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="{{ route('user.logic') }}"><img class="img-thumbnail" src="images/course-05.jpg" alt=""></a>
                            <span class="category">Topshiriqlar</span>
                            <span class="price"><h6></h6></span>
                        </div>
                        <div class="down-content">
                            <span class="author">Botir Xushboqov</span>
                            <h4>Mantiqiy topshiriqlar</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="{{ route('user.presentation') }}"><img src="images/course-06.jpg" alt=""></a>
                            <span class="category">Taqdimot</span>
                            <span class="price"><h6></h6></span>
                        </div>
                        <div class="down-content">
                            <span class="author">Botir Xushboqov</span>
                            <h4>Taqdimotlar</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="{{ route('user.rebus') }}"><img src="images/course-04.jpg" alt=""></a>
                            <span class="category">Topshiriqlar</span>
                            <span class="price"><h6></h6></span>
                        </div>
                        <div class="down-content">
                            <span class="author">Botir Xushboqov</span>
                            <h4>Matematik rebuslar</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="images/course-02.jpg" alt=""></a>
                            <span class="category">Topshiriqlar</span>
                            <span class="price"><h6></h6></span>
                        </div>
                        <div class="down-content">
                            <span class="author">Botir Xushboqov</span>
                            <h4>Kreativ topshiriqlar</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="{{ route('user.interaktiv') }}"><img class="img-thumbnail" src="images/video.jpg" alt=""></a>
                            <span class="category">Topshiriqlar</span>
                            <span class="price"><h6></h6></span>
                        </div>
                        <div class="down-content">
                            <span class="author">Botir Xushboqov</span>
                            <h4>Interaktiv metodlar</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img  src="images/topic.jpg" class="img-thumbnail" alt=""></a>
                            <span class="category">Maqola</span>
                            <span class="price"><h6></h6></span>
                        </div>
                        <div class="down-content">
                            <span class="author">Botir Xushboqov</span>
                            <h4>Maqolalar</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="images/videolesson.jpg" alt=""></a>
                            <span class="category">Video</span>
                            <span class="price"><h6></h6></span>
                        </div>
                        <div class="down-content">
                            <span class="author">Botir Xushboqov</span>
                            <h4>Videodarslar</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6">
                    <div class="events_item">
                        <div class="thumb">
                            <a href="#"><img src="images/pisa.jpg" alt=""></a>
                            <span class="category">Topshiriq</span>
                            <span class="price"><h6></h6></span>
                        </div>
                        <div class="down-content">
                            <span class="author">Botir Xushboqov</span>
                            <h4>Xalqaro baholash topshiriqlari</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                                    <p class="count-text ">Happy Students</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                                    <p class="count-text ">Course Hours</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                                    <p class="count-text ">Employed Students</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                                    <p class="count-text ">Years Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team section" id="team">
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="../img/author/author11.jpg" class="img-fluid" alt="">
                            <span class="category">Muallif</span>
                            <h4>Botir Xushboqov</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-member">
                        <div class="main-content">
                            <img src="../img/author/author22.jpg" alt="">
                            <span class="category">Muallif</span>
                            <h4>Qayumova Shoxsanam</h4>
                            <ul class="social-icons">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center">
                    <div class="section-heading">
                        <h6>Boglanish</h6>
                        <h2>Biz bilan bo'glanib talab va taklif bildirishingiz mumkin</h2>
                        <p>Web sayt bilan tanishib o'z fikringizni bildirayotganligingiz uchun siz minnaddorchilik
                            bildiramiz.</p>
                        <div class="special-offer">
                            <span class="offer"><br><em>-></em></span>
                            <h6>Websaytda: <em>xatolik topsangiz</em></h6>
                            <h4>CTRL + Enter <em>ni</em> bosing!</h4>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <form id="contact-form" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="name" name="name" id="name" placeholder="Your Name..."
                                               autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                               placeholder="Your E-mail..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="orange-button">Send Message Now
                                        </button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session('result') == 1)
        <div class="modal fade" id="addPatient" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Test natijasi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-check-square align-middle text-success">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg>
                        To'gri javob: {{ session('correct') }} ta <br><br>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-x align-middle text-danger">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                        Noto'gri javob: {{ session('incorrect') }} ta
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn text-white" data-bs-dismiss="modal"
                                style="background-color: #7a6ad8 !important;">Tugatish
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('js')
    @if(session('result') == 1)
        <script>
            $(window).on('load', function () {
                $('#addPatient').modal('show');
            });
        </script>
    @endif
@endsection


