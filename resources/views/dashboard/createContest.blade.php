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
                        <h4 > Tạo kì thi  
                        </h4>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">Tạo kì thi mới cho lớp {{$class}}</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('creatingContest',$id)}}" method="POST" autocomplete="off">
                                    @csrf
                                <div class="row">
                                    <label for="tencontest" style="color:black">Tên kì thi:</label>
                                    <input type="text"  name="tencontest" style="border-radius: 0px; border:1px solid black;" required placeholder="Nhập tên kì thi" class="form-control my-3">
                                    <label for="tencontest" style="color:black">Thời gian làm bài thi(Phút):</label>
                                    <input type="number"  name="time" style="border-radius: 0px;border:1px solid black;" required placeholder="Nhập thời gian làm bài (Phút)" class="form-control my-3">
                                </div><hr>
                                <div class="row mt-5" >
                                    <label for="tencontest" style="color:black" class="mb-3">Chọn câu hỏi:</label>
                                <div class="table-responsive ">
                                    <div id="example_wrapper" class="dataTables_wrapper">
                                        <table id="example" class="display dataTable mb-3" style="min-width: 845px" role="grid" aria-describedby="example_info">
                                            <thead>
                                                <tr role="row">
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  aria-label="Name: activate to sort column descending" style="width: 182.4px;">Chọn</th>
                                                <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1"  aria-label="Name: activate to sort column descending" style="width: 182.4px;">Câu hỏi</th>
        
                                                
                                            </thead>
                                            <tbody>
                                                @foreach($allQuestion as $data)
                                                <tr role="row" onmouseover="this.style.cursor='pointer';" onmouseout="this.style.cursor='none';">
                                                    <td  style="color:black;"> <input id="{{$data->id}}" type="checkbox" name="question[]" value="{{$data->id}}" id="" style="outline:1px solid black"/> </td>
                                                    <td  style="color:black; width:50%;">{!! $data->question !!}</td>
                                                    @if($data->mucdo=="de")
                                                        <td style="color:black;">Dễ</td>
                                                    @elseif($data->mucdo=="tb")
                                                        <td style="color:black;">Trung Bình</td>
                                                    @else 
                                                        <td style="color:black;">Khó</td>
                                                    @endif
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
                                <div class="row mt-5" style="text-align: center;">
                                    <button class="col-5 mt-5 btn btn-rounded btn-outline-danger" style="visibility: hidden;">ád</button>
                                    <button class="col-2 mt-5 btn btn-rounded btn-outline-danger" type="submit">Tạo đề</button>
                                    <button class="col-5 mt-5 btn btn-rounded btn-outline-danger" style="visibility: hidden;">ád</button>
                                    
                                </div>
                                </form>
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
    <script type="text/javascript">
        var $table = $('#fresh-table')
        var $alertBtn = $('#alertBtn')
    
        window.operateEvents = {
          'click .like': function (e, value, row, index) {
            alert('You click like icon, row: ' + JSON.stringify(row))
            console.log(value, row, index)
          },
          'click .edit': function (e, value, row, index) {
            alert('You click edit icon, row: ' + JSON.stringify(row))
            console.log(value, row, index)
          },
          'click .remove': function (e, value, row, index) {
            $table.bootstrapTable('remove', {
              field: 'id',
              values: [row.id]
            })
          }
        }
    
        function operateFormatter(value, row, index) {
          return [].join('')
        }
    
        $(function () {
          $table.bootstrapTable({
            classes: 'table table-hover table-striped',
            toolbar: '.toolbar',
    
            search: true,
            showRefresh: false,
            showToggle: false,
            showColumns: false,
            pagination: true,
            striped: true,
            sortable: true,
            pageSize: 8,
            pageList: [8, 10, 25, 50, 100],
    
            formatShowingRows: function (pageFrom, pageTo, totalRows) {
              return ''
            },
            formatRecordsPerPage: function (pageNumber) {
              return pageNumber + ' rows visible'
            }
          })
    
          $alertBtn.click(function () {
            alert('You pressed on Alert')
          })
        })
    
        $('#sharrreTitle').sharrre({
          share: {
            twitter: true,
            facebook: true
          },
          template: '',
          enableHover: false,
          enableTracking: true,
          render: function (api, options) {
            $("#sharrreTitle").html('Thank you for ' + options.total + ' shares!')
          },
          enableTracking: true,
          url: location.href
        })
    
        $('#twitter').sharrre({
          share: {
            twitter: true
          },
          enableHover: false,
          enableTracking: true,
          buttons: { twitter: {via: 'CreativeTim'}},
          click: function (api, options) {
            api.simulateClick()
            api.openPopup('twitter')
          },
          template: '<i class="fa fa-twitter"></i> {total}',
          url: location.href
        })
    
        $('#facebook').sharrre({
          share: {
            facebook: true
          },
          enableHover: false,
          enableTracking: true,
          click: function (api, options) {
            api.simulateClick()
            api.openPopup('facebook')
          },
          template: '<i class="fa fa-facebook-square"></i> {total}',
          url: location.href
        })
      </script>
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
</body>

</html>