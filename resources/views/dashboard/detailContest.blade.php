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
                        <h4>Lớp {{$classroom->name}}
                        </h4>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">Danh sách các học sinh đã làm {{$contest->name}}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                <div class="table-responsive">
                                    <div id="example_wrapper" class="dataTables_wrapper">
                                    <table id="example" class="display dataTable mb-3" style="min-width: 845px" role="grid" aria-describedby="example_info">
                                    <thead>
                                        <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 200.4px;">Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 138.4px;">Điểm</th>
                                        <th class="sorting_desc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 138.2px;">Số câu đúng</th>
                                        <th class="sorting_desc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 138.2px;">Thao tác</th>
                                    </thead>
                                    <tbody>
                                    @foreach($logcontest as $data)
                                        <tr role="row" onmouseover="this.style.cursor='pointer';" onmouseout="this.style.cursor='none';">
                                            @foreach($user->where('id',$data->idNguoiLam) as $val)
                                                <td class="sorting_1" style="color:black;">{{$val->name}}</td>
                                            @endforeach
                                            <td style="color:black;">{{$data->diem}} / 10</td>
                                            <td style="color:black;">{{$data->Dung}} / {{count(explode(" ",$contest->question))}}</td>
                                            <td style="color:black;">
                                                <a class="btn btn-primary btn-sm text-white" href="{{route('detailBailam',['id'=>$id,'idcontest'=>$idcontest,'idbai'=>$data->id])}}">Chi tiết</a>
                                            </td>
                                            
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="./js/dashboard/dashboard-8.js"></script>
    <script>
    function student (url){
            Swal.fire({
            title: 'Are you sure?',
            text: "Học sinh sẽ bị xóa khỏi lớp",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Xóa'
            }).then((result) => {
            if (!result.value) {
                Swal.fire(
                'Cancel!',
                'Dữ liệu chưa được xóa đi',
                'success'
                )
            }
            else{
                window.location=url;
            }
            });
        }
        function deleteContest (url){
            Swal.fire({
            title: 'Are you sure?',
            text: "Đề này sẽ bị xóa",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Xóa'
            }).then((result) => {
            if (!result.value) {
                Swal.fire(
                'Cancel!',
                'Dữ liệu chưa được xóa đi',
                'success'
                )
            }
            else{
                window.location=url;
            }
            });
        }
    </script>
</body>

</html>