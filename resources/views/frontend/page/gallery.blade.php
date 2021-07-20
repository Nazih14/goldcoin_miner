@extends('frontend.layouts.base')

@section('content')

<!-- <section id="home" class="intro intro-bg bg-overlay parallax"> -->
    <br><br>
    <section class="deneb_cta mt-5">
        <div class="container">
            <div class="cta_wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="cta_content">
                            <h3>Goldgainer dibentuk oleh para profesional bagi para individu yang ingin terlibat dalam penambangan uang kripto</h3>
                            <p>Kami percaya bahwa setiap orang harus mendapatkan keuntungan dari pertambangan dan dapat memiliki akses teknologi terbaru dan pusat data industri skala besar dari laptop atau ponsel.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="button_box">
                            <a href="#" class="btn btn-warning">Bergabunglah Bersama kami <span class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center my-2 mt-5">
                <h4>Gallery Goldgainer</h4>
            </div>
        </div>
        
        <div class="portfolio-item row mb-5">
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-young-woman-with-bags-taking-selfie_23-2147962203.jpg" alt="">
                </a>
                <script type="text/javascript">
                    function active_course() {
                        if ($(".active_course").length) {
                            $(".active_course").owlCarousel({
                                loop: true,
                                margin: 20,
                                items: 3,
                                nav: true,
                                autoplay: 2500,
                                smartSpeed: 1500,
                                dots: false,
                                responsiveClass: true,
                                thumbs: true,
                                thumbsPrerendered: true,
                                navText: ["<img src='https://colorlib.com/preview/theme/edustage/img/prev.png'>", "<img src='https://colorlib.com/preview/theme/edustage/img/next.png'>"],
                                responsive: {
                                    0: {
                                        items: 1,
                                        margin: 0
                                    },
                                    991: {
                                        items: 2,
                                        margin: 30
                                    },
                                    1200: {
                                        items: 3,
                                        margin: 30
                                    }
                                }
                            });
                        }
                    }
                    active_course(); 
                </script>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/pretty-girl-near-car_1157-16962.jpg" class="fancylight popup-btn" data-fancybox-group="light"> 
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/pretty-girl-near-car_1157-16962.jpg" alt="">
                </a>
            </div>
            <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/blonde-tourist-taking-selfie_23-2147978899.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/blonde-tourist-taking-selfie_23-2147978899.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/cute-girls-oin-studio_1157-18211.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/cute-girls-oin-studio_1157-18211.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/stylish-pin-up-girls_1157-18451.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-pin-up-girls_1157-18451.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/stylish-pin-up-girl_1157-18940.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/stylish-pin-up-girl_1157-18940.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/digital-laptop-working-global-business-concept_53876-23438.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/digital-laptop-working-global-business-concept_53876-23438.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-psd/set-digital-devices-screen-mockup_53876-76507.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-psd/set-digital-devices-screen-mockup_53876-76507.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/young-brunette-woman-with-sunglasses-urban-background_1139-893.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/young-brunette-woman-with-sunglasses-urban-background_1139-893.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-psd/laptop-digital-device-screen-mockup_53876-76509.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-psd/laptop-digital-device-screen-mockup_53876-76509.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/young-woman-holding-pen-hand-thinking-while-writing-notebook_23-2148029424.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/young-woman-holding-pen-hand-thinking-while-writing-notebook_23-2148029424.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-psd/female-fashion-concept_23-2147643598.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-psd/female-fashion-concept_23-2147643598.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/girl-city_1157-16454.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/girl-city_1157-16454.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/elegant-lady-with-laptop_1157-16643.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/elegant-lady-with-laptop_1157-16643.jpg" alt="">
                </a>
            </div>
            <div class="item lap col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-psd/laptop-mock-up-lateral-view_1310-199.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-psd/laptop-mock-up-lateral-view_1310-199.jpg" alt="">
                </a>
            </div>
            <div class="item gts col-lg-3 col-md-4 col-6 col-sm">
                <a href="https://image.freepik.com/free-photo/portrait-young-woman_1303-10071.jpg" class="fancylight popup-btn" data-fancybox-group="light">
                    <img class="img-fluid" src="https://image.freepik.com/free-photo/portrait-young-woman_1303-10071.jpg" alt="">
                </a>
            </div>
            
            
            
            
        </div>
    </div>
    
@endsection