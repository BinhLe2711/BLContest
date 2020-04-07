<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>BLContest - Dashboard</title>
    <base href="{{asset('public/main/template')}}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png"  href="{{asset('public')}}/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="{{asset('public/assets')}}/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="{{asset('public/main/icons/font-awesome/css')}}/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('public/assets')}}/plugins/innoto-switchery/dist/switchery.min.css" rel="stylesheet"/>
    <link href="./css/style.css" rel="stylesheet">
    <style>
        @media only screen and (min-width: 768px) {
            .avt{
                width: 100px;height: @if(Auth::user()->sex=="nam") 100px @else 110px @endif ; position: absolute; top:-68px;left:46%; 
                
            }
        }

        @media only screen and (max-width: 767px) {
            .avt{
                width: 90px;height: @if(Auth::user()->sex=="nam") 90px @else 100px @endif; position: absolute; top:-68px;left:46%;
            }
        }

        @media only screen and (max-width: 767px) and (orientation: portrait) {
            .avt{
                width: 80px;height:@if(Auth::user()->sex=="nam") 80px @else 90px @endif; position: absolute; top:-60px;left:38%;
            }
        }
    </style>
</head>

<body style="font-family: 'Poppins',sans-serif;">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo"><a href="index.html"><b><img  style="width:55px;height:55px;padding:4px;" src="../assets/images/logo.png" alt=""> </b><span class="brand-title"><img style="height:7rem;width:15rem;position:absolute;top:10px" src="../assets/images/2349477.svg" alt=""></span></a>
            </div>
            <div class="nav-control">
                <div class="hamburger"><span class="line"></span>  <span class="line"></span>  <span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        @include('include.header')
        <!--**********************************
            Header end
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('include.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h4 > Profile  
                        </h4>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <div style="width: 100%;text-align: center;" class="col-12">
                                    <img class="img-fluid avt"src="@if(Auth::user()->sex=='nam'){{asset('public/images/avt.png')}}@else {{asset('public/images/avt-2.png')}}@endif" alt="" >
                                    <!-- width: 80px;height: 80px; position: absolute; top:-68px;left:37%;  //mobile
                                         width: 100px;height: 100px; position: absolute; top:-68px;left:46%; //pc
                                         width: 90px;height: 90px; position: absolute; top:-68px;left:46%; //other
                                    -->
                                </div>
                                    
                            </div>
                            <div class="card-body">
                                <div class="row" >
                                    <div class="col-12">
                                        <form action="{{route('profile')}}" method="POST">
                                            @csrf
                                            <h4 class="card-title mt-4" style="text-align:center;">Quản lí trang cá nhân</h4>   
                                            <label for="username" style="color:black" value="1">Tên tài khoản: </label>
                                            <input type="text" name="ten" value="{{Auth::user()->username}}" readonly id="username" class="form-control" />
                                            <br>
                                            <label for="ten" style="color:black" value="1">Họ tên: </label>
                                            <input type="text" name="ten" value="{{Auth::user()->name}}" id="ten" class="form-control" /><br>

                                            <label for="email" style="color:black" value="1">Email: </label>
                                            <input type="text" name="email" value="{{Auth::user()->email}}" id="email" class="form-control" />
                                            <br><br>
                                            <label for="chk_3" class="mr-4" style="color:black" value="1">Giới tính: </label>
                                            <span style="color:black" class="mr-5">Nam</span>
                                            <input name="sex" id="chk_3" type="checkbox" class="m-0 p-0 js-switch js-switch-1 js-switch-sm" data-size="small" @if(Auth::user()->sex=="nu")checked @endif/>
                                            <span style="color:black; ">Nữ</span>
                                            <br>
                                            <br>
                                            <button class="col-md-4 mr-5 mt-3" style="visibility: hidden;"></button>
                                            <button type="submit" class="btn btn-primary col-md-3 col-12">Thay đổi thông tin</button>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                                
                            
                        </div>
                    </div>
                   
                </div>

                

            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        
        <!--**********************************
            Footer end
        ***********************************-->

        
     
        <!--**********************************
            Right sidebar end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    
    <script src="../assets/plugins/common/common.min.js"></script>
    <script src="{{asset('public/main')}}/js/custom.min.js"></script>
    <script src="./js/settings.js"></script>
    <script src="./js/gleek.js"></script>
    <script src="./js/styleSwitcher.js"></script>
    <!-- Morris Chart -->
    
    <script src="../assets/plugins/raphael/raphael.min.js"></script>
    <script src="../assets/plugins/morris/morris.min.js"></script>
    <script src="{{asset('public/assets')}}/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('public/main')}}/js/plugins-init/datatables.init.js"></script>
    <script src="../assets/plugins/chart.js/Chart.bundle.min.js"></script>
    <script>$('#example1').DataTable();</script>
    <script src="./js/dashboard/dashboard-8.js"></script>
    <script src="{{asset('public/assets')}}/plugins/innoto-switchery/dist/switchery.min.js"></script>
    <script src="js/plugins-init/switchery-init.js"></script>
</body>

</html>