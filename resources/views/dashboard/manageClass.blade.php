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
                        <h4>Magage Classroom
                        </h4>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">Danh sách các lớp học</h4>

                                <ul class="time-filter">
                                    <a href="{{route('createClass')}}"><button class="btn btn-info" style="border:0; color:white;">+ Tạo lớp mới</button></a>
                                </ul>
                            </div>
                            <div class="card-body">
                                <code>*Chú ý click vào lớp học để xem chi tiết lớp học, kì thi </code>
                                <div class="row">
                                <div class="table-responsive">
                                    <div id="example_wrapper" class="dataTables_wrapper">
                                    <table id="example" class="display dataTable mb-3" style="min-width: 845px" role="grid" aria-describedby="example_info">
                                    <thead>
                                        <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  aria-label="Name: activate to sort column descending" style="width: 182.4px;">Code</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200.4px;">Tên</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 138.4px;">Số bài tập</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 138.2px;">Số thành viên</th>
                                        <th class="sorting_desc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 138.2px;">Date create</th>

                                        
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($classroom as $data)
                                        <tr role="row" onclick="window.location='{{route('detailClassroom',$data->id)}}';" onmouseover="this.style.cursor='pointer';" onmouseout="this.style.cursor='none';">
                                            <td  style="color:black;">{{$data->code}}</td>
                                            <td class="sorting_1" style="color:black;">{{$data->name}} </td>
                                            <td style="color:black;">{{count($contest->where('idclass',$data->id))}}</td>
                                            <td style="color:black;">{{count($joinclass->where('idClass',$data->id))}}</td>
                                            <td style="color:black;">{{$data->created_at}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                                @if(count($classroom)==0)
                                    <span class="mt-3" style="width:100%;text-align:center; ">
                                        <h4>Có vẻ bạn chưa tạo lớp học nào :( </h4>
                                    </span>
                                @endif
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
    <script src="./js/dashboard/dashboard-8.js"></script>
</body>

</html>