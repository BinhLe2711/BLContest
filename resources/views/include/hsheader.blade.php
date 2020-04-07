<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="{{asset('public/hsFile')}}/">
    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets/fonts/Feather/feather.css">
    <link rel="stylesheet" href="./assets/libs/flickity/dist/flickity.min.css">
    <link rel="stylesheet" href="./assets/libs/flickity-fade/flickity-fade.css">
    <link rel="stylesheet" href="./assets/libs/aos/dist/aos.css">
    <link rel="stylesheet" href="./assets/libs/jarallax/dist/jarallax.css">
    <link rel="stylesheet" href="./assets/libs/highlightjs/styles/vs2015.css">
    <link rel="stylesheet" href="./assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Map -->
    <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css' rel='stylesheet' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="icon" type="image/png"  href="{{asset('public')}}/favicon.png">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.min.css">
    <script>toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
    }
</script>
@if (session('status'))
    <script>
    
        
    </script>
    <div onclick="$('#toast').toast('show');" data-delay="0" id="toast" class="toast shadow-dark" role="alert"
                        aria-live="assertive" aria-atomic="true"
                        style="z-index:100000000000;position: fixed; bottom: auto; right: auto; opacity: 1;right:5%; top:5%;">
                        <div class="toast-header">
                            <div class="icon icon-xs text-primary mr-2">
                                <!--?xml version="1.0" encoding="UTF-8"?-->
                                <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                    <title>Stockholm-icons / Communication / Chat#5</title>
                                    <desc>Created with Sketch.</desc>
                                    <g id="Stockholm-icons-/-Communication-/-Chat#5" stroke="none" stroke-width="1"
                                        fill="none" fill-rule="evenodd">
                                        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                        <path
                                            d="M21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L6,18 C4.34314575,18 3,16.6568542 3,15 L3,6 C3,4.34314575 4.34314575,3 6,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 Z"
                                            id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                                        <path
                                            d="M7.5,12 C6.67157288,12 6,11.3284271 6,10.5 C6,9.67157288 6.67157288,9 7.5,9 C8.32842712,9 9,9.67157288 9,10.5 C9,11.3284271 8.32842712,12 7.5,12 Z M12.5,12 C11.6715729,12 11,11.3284271 11,10.5 C11,9.67157288 11.6715729,9 12.5,9 C13.3284271,9 14,9.67157288 14,10.5 C14,11.3284271 13.3284271,12 12.5,12 Z M17.5,12 C16.6715729,12 16,11.3284271 16,10.5 C16,9.67157288 16.6715729,9 17.5,9 C18.3284271,9 19,9.67157288 19,10.5 C19,11.3284271 18.3284271,12 17.5,12 Z"
                                            id="Combined-Shape" fill="#335EEA" opacity="0.3"></path>
                                    </g>
                                </svg>
                            </div>
                            <strong class="mb-0 mr-auto">Thông báo</strong>
                            <small class="text-muted">1s ago</small>
                            <button type="button" class="ml-3 close" data-dismiss="toast" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="toast-body">
                            Không tồn tại mã này. Vui lòng thử lại.
                        </div>
                    </div>
@endif
    <title>BLContest</title>
</head>

<body>

<div class="modal fade" id="modalSignupHorizontal" tabindex="-1" role="dialog" aria-labelledby="modalSignupHorizontalTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="card card-row">
            <div class="row no-gutters">
              <div class="col-12 col-md-6 bg-cover card-img-left" style="background-image: url(assets/img/covers/2720246.png);">

                <!-- Image (placeholder) -->
                <img src="./assets/img/photos/photo-8.jpg" alt="..." class="img-fluid d-md-none invisible">

                <!-- Shape -->
                <div class="shape shape-right shape-fluid-y svg-shim text-white d-none d-md-block">
                  <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M116 0H51V172C76 384 0 517 0 517V690H116V0Z" fill="currentColor"/>
                  </svg>
                </div>

              </div>
              <div class="col-12 col-md-6">
                <div class="card-body">

                  <!-- Close -->
                  <button type="button" class="modal-close close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
              
                  <!-- Heading -->
                  <h2 class="mb-0 font-weight-bold text-center" id="modalSignupHorizontalTitle">
                    Tham gia lớp học
                  </h2>

                  <!-- Text -->
                  <p class="mb-6 text-center text-muted">
                    Tham gia lớp học mới chỉ trong vòng 0.0012s 
                  </p>

                  <!-- Form -->
                  <form class="mb-6" method="post" action="{{route('joinclass')}}">
                      @csrf
                    <div class="form-group">
                      <label class="sr-only" for="modalSignupHorizontalEmail">
                        Nhập mã giáo viên cấp
                      </label>
                      <input name ="code" type="text" class="form-control" id="modalSignupHorizontalEmail" placeholder="Nhập mã giáo viên cấp">
                    </div>

                    

                    <!-- Submit -->
                    <button class="btn btn-block btn-primary" type="submit">
                      Vào lớp học
                    </button>

                  </form>


                </div>
              </div>

            </div> <!-- / .row -->
          </div>
        </div>
      </div>
    </div>  

    <!-- NAVBAR
        ================================================== -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand" href="{{route('hsDashboard')}}">
                <h2 class="text-primary" style="position:relative;bottom:-7px;"><b>BLContest<span>.</span></b></h2>
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fe fe-x"></i>
                </button>

                <!-- Navigation -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link " id="" href="{{route('hsDashboard')}}" aria-haspopup="true" aria-expanded="false">
                            Home
                        </a>

                    </li>
                    <li class="nav-item">
                        <a data-toggle="modal" href="#modalSignupHorizontal" class="nav-link" id="navbarPages" href="#" aria-haspopup="true" aria-expanded="false">
                            Tham gia lớp học mới
                        </a>

                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " id="navbarAccount" href="{{route('findClass')}}" aria-haspopup="true" aria-expanded="false">
                            Tìm kiếm lớp học đã tham gia
                        </a>

                    </li>
                    
                </ul>
                <ul class="navbar-nav ml-auto" >

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDocumentation" data-toggle="dropdown" href="#"
                            aria-haspopup="true" aria-expanded="false">
                            <?php 
                                $arr=explode(" ",Auth::user()->name);
                                $ten=$arr[count($arr)-1];
                            ?>
                            Xin chào, {{$ten}} !
                        </a>
                        <div class="dropdown-menu dropdown-menu-md" aria-labelledby="navbarDocumentation">
                            <div class="list-group list-group-flush">
                                <!-- <a class="list-group-item" href="./docs/index.html">

                                    <div class="icon icon-sm text-primary">
                                        <?xml version="1.0" encoding="UTF-8"?>
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>Stockholm-icons / Design / Sketch</title>
                                            <desc>Created with Sketch.</desc>
                                            <g id="Stockholm-icons-/-Design-/-Sketch" stroke="none" stroke-width="1"
                                                fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                <polygon id="Path-48" fill="#335EEA" opacity="0.3"
                                                    points="5 3 19 3 23 8 1 8"></polygon>
                                                <polygon id="Path-48-Copy" fill="#335EEA" points="23 8 12 20 1 8">
                                                </polygon>
                                            </g>
                                        </svg>
                                    </div>

                                    <div class="ml-4">

                                        <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                                            Thay đổi thông tin
                                        </h6>

                                        <p class="font-size-sm text-gray-700 mb-0">
                                            Chỉnh sửa tên, giới tính, email
                                        </p>

                                    </div>

                                </a>
                                <a class="list-group-item" href="./docs/alerts.html">

                                    <div class="icon icon-sm text-primary">
                                        <?xml version="1.0" encoding="UTF-8"?>
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>Stockholm-icons / General / Thunder</title>
                                            <desc>Created with Sketch.</desc>
                                            <g id="Stockholm-icons-/-General-/-Thunder" stroke="none" stroke-width="1"
                                                fill="none" fill-rule="evenodd">
                                                <rect id="Rectangle-10" x="0" y="0" width="24" height="24"></rect>
                                                <path
                                                    d="M12.3740377,19.9389434 L18.2226499,11.1660251 C18.4524142,10.8213786 18.3592838,10.3557266 18.0146373,10.1259623 C17.8914367,10.0438285 17.7466809,10 17.5986122,10 L13,10 L13,4.47708173 C13,4.06286817 12.6642136,3.72708173 12.25,3.72708173 C11.9992351,3.72708173 11.7650616,3.85240758 11.6259623,4.06105658 L5.7773501,12.8339749 C5.54758575,13.1786214 5.64071616,13.6442734 5.98536267,13.8740377 C6.10856331,13.9561715 6.25331908,14 6.40138782,14 L11,14 L11,19.5229183 C11,19.9371318 11.3357864,20.2729183 11.75,20.2729183 C12.0007649,20.2729183 12.2349384,20.1475924 12.3740377,19.9389434 Z"
                                                    id="Path-3" fill="#335EEA"></path>
                                            </g>
                                        </svg>
                                    </div>

                                    <div class="ml-4">

                                        <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                                            Mật khẩu
                                        </h6>

                                        <p class="font-size-sm text-gray-700 mb-0">
                                            Đổi mật khẩu mới
                                        </p>

                                    </div>

                                </a> -->
                                <a class="list-group-item" href="{{route('logout')}}">

                                    <!-- Icon -->
                                    <div class="icon icon-sm text-primary">
                                        <?xml version="1.0" encoding="UTF-8"?>
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <!-- Generator: Sketch 52.2 (67145) - http://www.bohemiancoding.com/sketch -->
                                            <title>Stockholm-icons / Navigation / Sign-out</title>
                                            <desc>Created with Sketch.</desc>
                                            <g id="Stockholm-icons-/-Navigation-/-Sign-out" stroke="none"
                                                stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                <path
                                                    d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z"
                                                    id="Path-103" fill="#335EEA" opacity="0.3"
                                                    transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) ">
                                                </path>
                                                <rect id="Rectangle" fill="#335EEA" opacity="0.3"
                                                    transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) "
                                                    x="13" y="6" width="2" height="12" rx="1"></rect>
                                                <path
                                                    d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z"
                                                    id="Path-104" fill="#335EEA"
                                                    transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) ">
                                                </path>
                                            </g>
                                        </svg>
                                    </div>

                                    <!-- Content -->
                                    <div class="ml-4">

                                        <!-- Heading -->
                                        <h6 class="font-weight-bold text-uppercase text-primary mb-0">
                                            Logout
                                        </h6>

                                        <!-- Text -->
                                        <p class="font-size-sm text-gray-700 mb-0">
                                            Đăng xuất khỏi hệ thống
                                        </p>

                                    </div>

                                    <!-- Badge -->
                                    <span class="badge badge-pill badge-primary-soft ml-auto">
                                        BYE!!
                                    </span>

                                </a>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </nav>