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
    <link href="./css/style.css" rel="stylesheet">
    
</head>

<body>
    
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
            <div class="brand-logo"><a href="{{route('gvDashboard')}}"><b><img  style="width:55px;height:55px;padding:4px;" src="../assets/images/logo.png" alt=""> </b><span class="brand-title"><img style="height:7rem;width:15rem;position:absolute;top:10px" src="../assets/images/2349477.svg" alt=""></span></a>
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
                        <h4>Create new classroom
                        </h4>
                    </div>
                </div>
                <!-- row -->
                
                <div class="row">
                <div class="col-xl-12">
                        <div class="card forms-card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Tạo lớp học mới</h4>
                                <div class="basic-form">
                                    <form action="{{route('createClass')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="text-label">Tên lớp học* (Không cần ghi chữ lớp phía trước chỉ ghi tên lớp vd: 5/1) </label>
                                            <input type="text" autocomplete="off" required name="nameclass" class="form-control" placeholder="5/1" required="">
                                        </div>
                                        @if(isset($success))
                                        <h5 class="text-success mb-4">
                                            {{$success}}
                                        </h5>
                                        @endif
                                        <span style="width:100%; text-align:center;">
                                        <button type="submit" class="btn btn-primary btn-form mr-2">Submit</button>
                                        <button type="button" class="btn btn-light text-dark btn-form" onclick="window.location='{{route('gvDashboard')}}';">Cancel</button>
                                        <span>
                                    </form>
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
   
    <script src="./js/dashboard/dashboard-8.js"></script>
</body>

</html>