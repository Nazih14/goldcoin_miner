@extends('frontend.layouts.base')

@section('add-js')
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
@endsection

@section('content')
<section id="home" class="intro intro-bg parallax">
    <div class="container mt-5">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-12 col-sm-12 caption-two-panel mb-5">
                    <div class="intro-caption mt-5">
                        <center>
                            <h1 class="text-white mb-2">MULAI MENAMBANG BITCOIN SEKARANG JUGA!</h1>
                            <p class="text-white mb-4">
                                Caranya sangat mudah - mesin penambangan Anda telah selesai dan siap bekerja.
                                Segera setelah Anda membuat akun, Anda bisa mulai menambang koin pertama Anda menggunakan layanan penambangan Bitcoin kami yang berbasis cloud!
                            </p>
                            <a href="signup.html" class="btn btn-warning text-white">Info Goldgainer <span class="fas fa-chevron-circle-right"></span></a>
                            <a href="register.html" class="btn btn-outline-warning text-white">COBA SEKARANG <span class="fas fa-chevron-circle-right"></span></a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <section id="services" class="pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center mt-5">
                <div class="col-lg-12">
                    <center>
                        <h2 class="title">What <span>Service</span> We
                            Offer
                        </h2>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
                        <a class="btn btn-primary mb-5" href="#">More Info </a>
                    </center>
                </div>
                <div class="col-lg-12">
                    <div class="row card-items pt-50">
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <center>
                                        <img src="https://img.icons8.com/bubbles/100/000000/cash-register.png"/>
                                    </center>
                                    <h5 class="card-title text-center"><b>Perangkat keras Andasudah berjalan</b></h5>
                                    <p class="card-text text-center">Tidak perlu repot lagi merakit perangkat mining yang panas serta berisik di rumah Anda. Kami memiliki perangkat mining bitcoin tercepat yang siap bekerja untuk Anda sepenuhnya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <center>
                                        <img class="img-fluid" src="https://img.icons8.com/bubbles/100/000000/design.png"/>
                                    </center>
                                    <h5 class="card-title text-center"><b>Tambang mata uang virtual alternatif</b></h5>
                                    <p class="card-text text-center">Anda dapat menambang mata uang virtual yang tersedia di katalog kami. Alihkan kekuatan mining Anda dengan cepat untuk semua koin menggunakan situs web mining bitcoin kami.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <center>
                                        <img class="img-fluid" src="https://img.icons8.com/bubbles/100/000000/rescan-document.png"/>
                                    </center>
                                    <h5 class="card-title text-center"><b>Dapatkan hasil penambanganpertama Anda hari ini</b></h5>
                                    <p class="card-text text-center">Anda akan mendapatkan hasil penambangan secara berkala ke dompet yang Anda pilih. Coba platform penambangan Bitcoin kami sekarang juga!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    
    <section class="deneb_cta">
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
    
    
    <section>
        <div class="popular_courses">
            <div class="container">
                <div class="justify-content-center">
                    <div class="col-lg-12">
                        <div class="main_title">
                            <h2 class="mb-3">Our Popular Post</h2>
                            <p>
                                Replenish man have thing gathering lights yielding shall you
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="owl-carousel active_course owl-loaded owl-drag">
                            <div class="owl-stage-outer">
                                <div class="owl-stage" style="transform: translate3d(-1520px, 0px, 0px); transition: all 1.5s ease 0s; width: 3420px;">
                                    <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                        <div class="single_course">
                                            <div class="course_head">
                                                <img class="img-fluid" src="{{url('media/images/support/placeholder.jpg')}}" alt="" />
                                            </div>
                                            <div class="course_content">
                                                <!-- <span class="price">$25</span> -->
                                                <span class="tag mb-4 d-inline-block">design</span>
                                                <h4 class="mb-3">
                                                    <a href="page/detail">Custom Product Design</a>
                                                </h4>
                                                <p>
                                                    One make creepeth man bearing their one firmament won't fowl meat over sea
                                                </p>
                                                <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                    <div class="authr_meta">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                                        <span class="d-inline-block ml-2">Cameron</span>
                                                    </div>
                                                    <div class="mt-lg-0 mt-3">
                                                        <span class="meta_info mr-4">
                                                            <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                                        </span>
                                                        <span class="meta_info">
                                                            <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                        <div class="single_course">
                                            <div class="course_head">
                                                <img class="img-fluid" src="{{url('media/images/support/placeholder.jpg')}}" alt="" />
                                            </div>
                                            <div class="course_content">
                                                <!-- <span class="price">$25</span> -->
                                                <span class="tag mb-4 d-inline-block">design</span>
                                                <h4 class="mb-3">
                                                    <a href="page/detail">Social Media Network</a>
                                                </h4>
                                                <p>
                                                    One make creepeth man bearing their one firmament won't fowl meat over sea
                                                </p>
                                                <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                    <div class="authr_meta">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                                        <span class="d-inline-block ml-2">Cameron</span>
                                                    </div>
                                                    <div class="mt-lg-0 mt-3">
                                                        <span class="meta_info mr-4">
                                                            <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                                        </span>
                                                        <span class="meta_info">
                                                            <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                        <div class="single_course">
                                            <div class="course_head">
                                                <img class="img-fluid" src="{{url('media/images/support/placeholder.jpg')}}" alt="" />
                                            </div>
                                            <div class="course_content">
                                                <!-- <span class="price">$25</span> -->
                                                <span class="tag mb-4 d-inline-block">design</span>
                                                <h4 class="mb-3">
                                                    <a href="page/detail">Computer Engineering</a>
                                                </h4>
                                                <p>
                                                    One make creepeth man bearing their one firmament won't fowl meat over sea
                                                </p>
                                                <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                    <div class="authr_meta">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" />
                                                        <span class="d-inline-block ml-2">Cameron</span>
                                                    </div>
                                                    <div class="mt-lg-0 mt-3">
                                                        <span class="meta_info mr-4">
                                                            <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                                        </span>
                                                        <span class="meta_info">
                                                            <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item" style="width: 350px; margin-right: 30px;">
                                        <div class="single_course">
                                            <div class="course_head">
                                                <img class="img-fluid" src="{{url('media/images/support/placeholder.jpg')}}" alt="" />
                                            </div>
                                            <div class="course_content">
                                                <!-- <span class="price">$25</span> -->
                                                <span class="tag mb-4 d-inline-block">design</span>
                                                <h4 class="mb-3">
                                                    <a href="page/detail">Custom Product Design</a>
                                                </h4>
                                                <p>
                                                    One make creepeth man bearing their one firmament won't fowl meat over sea
                                                </p>
                                                <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                    <div class="authr_meta">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="" />
                                                        <span class="d-inline-block ml-2">Cameron</span>
                                                    </div>
                                                    <div class="mt-lg-0 mt-3">
                                                        <span class="meta_info mr-4">
                                                            <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                                        </span>
                                                        <span class="meta_info">
                                                            <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                                        <div class="single_course">
                                            <div class="course_head">
                                                <img class="img-fluid" src="{{url('media/images/support/placeholder.jpg')}}" alt="" />
                                            </div>
                                            <div class="course_content">
                                                <!-- <span class="price">$25</span> -->
                                                <span class="tag mb-4 d-inline-block">design</span>
                                                <h4 class="mb-3">
                                                    <a href="page/detail">Social Media Network</a>
                                                </h4>
                                                <p>
                                                    One make creepeth man bearing their one firmament won't fowl meat over sea
                                                </p>
                                                <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                    <div class="authr_meta">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="" />
                                                        <span class="d-inline-block ml-2">Cameron</span>
                                                    </div>
                                                    <div class="mt-lg-0 mt-3">
                                                        <span class="meta_info mr-4">
                                                            <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                                        </span>
                                                        <span class="meta_info">
                                                            <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                                        <div class="single_course">
                                            <div class="course_head">
                                                <img class="img-fluid" src="{{url('media/images/support/placeholder.jpg')}}" alt="" />
                                            </div>
                                            <div class="course_content">
                                                <!--     <span class="price">$25</span> -->
                                                <span class="tag mb-4 d-inline-block">design</span>
                                                <h4 class="mb-3">
                                                    <a href="page/detail">Computer Engineering</a>
                                                </h4>
                                                <p>
                                                    One make creepeth man bearing their one firmament won't fowl meat over sea
                                                </p>
                                                <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                    <div class="authr_meta">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="" />
                                                        <span class="d-inline-block ml-2">Cameron</span>
                                                    </div>
                                                    <div class="mt-lg-0 mt-3">
                                                        <span class="meta_info mr-4">
                                                            <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                                        </span>
                                                        <span class="meta_info">
                                                            <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned active" style="width: 350px; margin-right: 30px;">
                                        <div class="single_course">
                                            <div class="course_head">
                                                <img class="img-fluid" src="{{url('media/images/support/placeholder.jpg')}}" alt="" />
                                            </div>
                                            <div class="course_content">
                                                <!-- <span class="price">$25</span> -->
                                                <span class="tag mb-4 d-inline-block">design</span>
                                                <h4 class="mb-3">
                                                    <a href="page/detail">Custom Product Design</a>
                                                </h4>
                                                <p>
                                                    One make creepeth man bearing their one firmament won't fowl meat over sea
                                                </p>
                                                <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                    <div class="authr_meta">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" />
                                                        <span class="d-inline-block ml-2">Cameron</span>
                                                    </div>
                                                    <div class="mt-lg-0 mt-3">
                                                        <span class="meta_info mr-4">
                                                            <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                                        </span>
                                                        <span class="meta_info">
                                                            <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                        <div class="single_course">
                                            <div class="course_head">
                                                <img class="img-fluid" src="{{url('media/images/support/placeholder.jpg')}}" alt="" />
                                            </div>
                                            <div class="course_content">
                                                <!-- <span class="price">$25</span> -->
                                                <span class="tag mb-4 d-inline-block">design</span>
                                                <h4 class="mb-3">
                                                    <a href="page/detail">Social Media Network</a>
                                                </h4>
                                                <p>
                                                    One make creepeth man bearing their one firmament won't fowl meat over sea
                                                </p>
                                                <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                    <div class="authr_meta">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" />
                                                        <span class="d-inline-block ml-2">Cameron</span>
                                                    </div>
                                                    <div class="mt-lg-0 mt-3">
                                                        <span class="meta_info mr-4">
                                                            <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                                        </span>
                                                        <span class="meta_info">
                                                            <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                        <div class="single_course">
                                            <div class="course_head">
                                                
                                                <img class="img-fluid" src="{{url('media/images/support/placeholder.jpg')}}" alt="" />
                                            </div>
                                            <div class="course_content">
                                                <!-- <span class="price">$25</span> -->
                                                <span class="tag mb-4 d-inline-block">design</span>
                                                <h4 class="mb-3">
                                                    <a href="post_detail.html">Computer Engineering</a>
                                                </h4>
                                                <p>
                                                    One make creepeth man bearing their one firmament won't fowl meat over sea
                                                </p>
                                                <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                    <div class="authr_meta">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" />
                                                        <span class="d-inline-block ml-2">Cameron</span>
                                                    </div>
                                                    <div class="mt-lg-0 mt-3">
                                                        <span class="meta_info mr-4">
                                                            <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                                                        </span>
                                                        <span class="meta_info">
                                                            <a href="#"> <i class="ti-heart mr-2"></i>35 </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <div class="col-lg-12">
                    <div class="button_box">
                        <a href="#" class="btn btn-warning btn-lg">View All <span class="fas fa-arrow-right"></span></a>
                    </div>
                </div>
            </center>
        </div>
    </div>
    
</section>


<section id="clients" class="section-bg">
    <div class="container">
        <div class="section-header">
            <h3>Our Client</h3>
            <p>Meet our happy clients</p>
        </div>
        <div class="row no-gutters shadow-sm clients-wrap clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460149/abof.png" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460224/cropped-cropped-20170720-lucuLogo-squ2-e1500543540803.png" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460269/104840a62d46c05d285762857fecb61a.png" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460358/client-4.png" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460379/client-5.png" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460398/client-6.png" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1559460418/client-7.png" class="img-fluid" alt=""> </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo"> <img src="https://logodownload.org/wp-content/uploads/2019/07/mini-logo.png" class="img-fluid" alt=""> </div>
            </div>
        </div>
    </div>
</section>

@endsection