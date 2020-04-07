<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Document Title -->
    <title>BLContest - Trang web tạo và làm bài thi trực tuyến</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{asset('public')}}/favicon.png">

    <!-- CSS Files -->
    <!--==== Google Fonts ====-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">

    <!--==== Bootstrap css file ====-->
    <link rel="stylesheet" href="{{asset('public')}}/assets/css/bootstrap.min.css">

    <!--==== Font-Awesome css file ====-->
    <link rel="stylesheet" href="{{asset('public')}}/assets/css/font-awesome.min.css">

    <!-- Owl Carusel css file -->
    <link rel="stylesheet" href="{{asset('public')}}/assets/plugins/owl-carousel/owl.carousel.min.css">

    <!-- ====video poppu css==== -->
    <link rel="stylesheet" href="{{asset('public')}}/assets/plugins/Magnific-Popup/magnific-popup.css">

    <!--==== Style css file ====-->
    <link rel="stylesheet" href="{{asset('public')}}/assets/css/style.css">

    <!--==== Responsive css file ====-->
    <link rel="stylesheet" href="{{asset('public')}}/assets/css/responsive.css">

    <!--==== Custom css file ====-->
    <link rel="stylesheet" href="{{asset('public')}}/assets/css/custom.css">
</head>

<body>
    <!-- Preloader -->
    <div class="preLoader">
        <div class="preload-inner">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
    </div>
    <!-- End Of Preloader -->

    <!-- Main header -->
    <header class="header">
        <!-- Start Header Navbar-->
        <div class="main-header">
            <div class="main-menu-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-6">
                            <!-- Logo -->
                            <div class="logo">
                                <li>
                                <a href="#home">
                                    <h3 style="color: black;">BLContest</h3>    
                                </a>
                                </li>
                            </div>
                            <!-- End of Logo -->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-4 col-6 menu-button">
                            <div class="menu--inner-area clearfix">
                                <div class="menu-wraper">
                                    <nav>
                                        <!-- Header-menu -->
                                        <div class="header-menu dosis">
                                            <ul>
                                                <li class="active"><a href="#home">Trang chủ</a>
                                                    
                                                </li>
                                                <li><a href="#features">Tính năng</a></li>
                                            </ul>
                                        </div>
                                        <!-- End of Header-menu -->
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-5 d-md-block d-none">
                            <div class="urgent-call text-right">
                               <a href="{{route('login')}}" class="btn">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Navbar-->
    </header>
    <!-- End of Main header -->
    
    <!-- home banner area -->
    <div class="banner-area-inner" id="home">
        <div class="banner-inner-area banner-area1">
            <div class="container">
                <div class="row align-items-center " style="margin-bottom:350px ;">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <!-- banner text -->
                        <div class="banner-text-inner">
                            <div class="banner-shape-wrap">
                                <div class="banner-shape-inner">
                                    <img src="{{asset('public')}}/assets/img/banner/shaps1.png" alt="" class='shape shape1 rotate3d'>
                                    <img src="{{asset('public')}}/assets/img/banner/shaps2.png" alt="" class='shape shape2 rotate2d'>
                                    <img src="{{asset('public')}}/assets/img/banner/shaps3.png" alt="" class='shape shape3 rotate-2d'>
                                    <img src="{{asset('public')}}/assets/img/banner/shaps4.png" alt="" class='shape shape4 rotate3d'>
                                    <img src="{{asset('public')}}/assets/img/banner/shaps5.png" alt="" class='shape shape5 rotate2d'>
                                    <img src="{{asset('public')}}/assets/img/banner/shaps6.png" alt="" class='shape shape6 rotate-2d'>
                                    <img src="{{asset('public')}}/assets/img/banner/shaps7.png" alt="" class='shape shape7 rotate3d'>
                                </div>
                            </div>

                            <h1>BLContest</h1>
                            <p>Hiện tại đã là thời đại công nghệ 4.0. Mọi thứ đang dần thay đổi. Hầu hết ngày nay ai cũng sử dụng internet cả. Giao bài tập online sẽ khiến các bạn học sinh vừa ôn lại bài cũ vừa đỡ mất thời gian vào các trò chơi điện tử. Khác với kiểu bài tập truyền thống phương pháp này sẽ khiến các bạn HS thích thú hơn trong việc làm bài tập.</p>
                            <a href="{{route('login')}}" class="btn">Đăng Nhập</a>
                            <a href="{{route('register')}}" class="btn">Đăng Kí</a>
                        </div>
                        <!-- banner text -->
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-4 offse-xl-2">
                        <!-- banner image-->
                        <div class="banner-image">
                           
                        </div>
                        <!--End of banner image-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of home banner area -->

    <!-- feature area -->
    <section class="pb-110" id='features'>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                    <!-- section title -->
                    <div class="section-title text-center">
                        <h2>Những tính tăng của BLContest</h2>
                        <p>Sau đây là một số tính năng mà mình đã nghiên cứu và thực hiện được. Và đương nhiên sẽ còn nhiều tính năng sớm ra mắt.</p>
                    </div>
                    <!-- End of section title -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12">
                    <div class="feature-carousel owl-carousel">
                        <!-- single feature inner -->
                        <div class="single-feature-inner text-center">
                            <div class="feature-icon"><img src="{{asset('public')}}/assets/img/icons/project-management.svg" class="svg" alt=""></div>
                            <h5>Tạo lớp học</h5>
                            <p>Giúp bạn dễ dàng tạo và quản lý lớp học.</p>
                        </div>
                        <!-- End of single feature inner -->

                        <!-- single feature inner -->
                        <div class="single-feature-inner text-center">
                            <div class="feature-icon"><img src="{{asset('public')}}/assets/img/icons/solution.svg" class="svg" alt=""></div>
                            <h5>Random question</h5>
                            <p>Để tránh học sinh không trao đổi bài. Hệ thống sẽ xáo trộn các câu hỏi, câu trả lời.</p>
                        </div>
                        <!-- End of single feature inner -->

                        <!-- single feature inner -->
                        <div class="single-feature-inner text-center">
                            <div class="feature-icon"><img src="{{asset('public')}}/assets/img/icons/planning.svg" class="svg" alt=""></div>
                            <h5>Đa nền tảng</h5>
                            <p>BLContest hỗ trợ mọi nền tảng. Bạn có thể truy cập BLContest mọi lúc mọi nơi.</p>
                        </div>
                        <!-- End of single feature inner -->

                        <!-- single feature inner -->
                        <div class="single-feature-inner text-center">
                            <div class="feature-icon"><img src="{{asset('public')}}/assets/img/icons/goal.svg" class="svg" alt=""></div>
                            <h5>Tạo câu dễ dàng, nhanh chóng</h5>
                            <p>Tạo câu hỏi nhanh. Có thể sử dụng lại câu hỏi đã tạo cho các lớp học khác</p>
                        </div><!-- End of single feature inner -->
                    </div><!--/.feature-carousel-->
                </div><!--/.col-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!-- End of feature area -->

    <!-- Counter up area -->
    <!-- <section class="border-top pt-120 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-counter text-center">
                        <span class="counter">4789</span>
                        <p>Downloads</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-counter text-center">
                        <span class="counter">6389</span>
                        <p>Liks</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-counter text-center">
                        <span class="counter">900</span>
                        <p>5 Star Reating</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-counter text-center">
                        <span class="counter">489</span>
                        <p>Awards</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- interact user -->
    <section class="bg-2 pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-7">
                    <!-- user interact image -->
                    <div class="user-interact-image">
                        <img style="transform: skew(0,-10deg);" src="{{asset('public/images')}}/landing.png"  alt="">
                    </div>
                    <!-- End of user interact image -->
                </div>
                <div class="col-lg-5 col-sm-5">
                    <!-- user ineract text -->
                    <div class="user-interact-inner">
                        <div class="interact-icon">
                            <img src="{{asset('public')}}/assets/img/icons/teamwork.svg" class="svg" alt="">
                        </div>
                        <h2>Giao diện đơn giản dễ sử dụng</h2>
                        <p>
                            Giao diện được làm tối giản để tiện sử dụng cho cả giáo viên và học sinh.
                        </p>
                        <a href="{{route('login')}}" class="btn">Get Started</a>
                    </div>
                    <!--End of user ineract text -->
                </div>
            </div>
        </div>
    </section>
    <!-- interact user -->

    

    <!-- download app -->
    <section class="border-top pt-110 pb-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="download-app-inner text-center">
                        <h2 class="h1">
                            BLContest đa nền tảng &<br>
                            có thể truy cập mọi lúc mọi nơi.
                        </h2>
                        <h3>Download file apk BLContest tại đây</h3>
                        <a href="#" class="btn">Download App</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of download app -->
    
    

    <!-- back to top -->
    <div class="back-to-top">
        <a href="#"><i class="fa fa-chevron-up"></i></a>
    </div>
    <!-- back to top -->


    <!-- JS Files -->
   <!-- ==== JQuery 3.3.1 js file==== -->
    <script src="{{asset('public')}}/assets/js/jquery-3.3.1.min.js"></script>

    <!-- ==== Bootstrap js file==== -->
    <script src="{{asset('public')}}/assets/js/bootstrap.bundle.min.js"></script>

    <!-- ==== JQuery Waypoint js file==== -->
    <script src="{{asset('public')}}/assets/plugins/waypoints/jquery.waypoints.min.js"></script>

    <!-- ==== Parsley js file==== -->
    <script src="{{asset('public')}}/assets/plugins/parsley/parsley.min.js"></script>

    <!-- ==== parallax js==== -->
    <script src="{{asset('public')}}/assets/plugins/parallax/parallax.js"></script>

    <!-- ==== Owl Carousel js file==== -->
    <script src="{{asset('public')}}/assets/plugins/owl-carousel/owl.carousel.min.js"></script>

    <!-- ==== Menu  js file==== -->
    <script src="{{asset('public')}}/assets/js/menu.min.js"></script>

    <!-- ===video popup=== -->
    <script src="{{asset('public')}}/assets/plugins/Magnific-Popup/jquery.magnific-popup.min.js"></script>

    <!-- ====Counter js file=== -->
    <script src="{{asset('public')}}/assets/plugins/waypoints/jquery.counterup.min.js"></script>

    <!-- ==== Script js file==== -->
    <script src="{{asset('public')}}/assets/js/scripts.js"></script>

    <!-- ==== Custom js file==== -->
    <script src="{{asset('public')}}/assets/js/custom.js"></script>

</body>
</html>