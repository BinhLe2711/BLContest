@include('include.hsheader')



<!-- WELCOME
        ================================================== -->
<section class="pt-8 pt-md-11 mb-10">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md">

                <!-- Link -->
                <a href="{{route('findClass')}}" class="font-weight-bold font-size-sm text-decoration-none mb-3">
                    <i class="fe fe-arrow-left mr-3"></i> Back
                </a>

                <!-- Heading -->
                <h1 class="display-4 mb-2">
                    Lớp {{$classroom->name}}
                </h1>

                <!-- Text -->
                <p class="font-size-lg text-gray-700 mb-5 mb-md-0">
                    Lớp có {{count($joinclass->where('idClass',$id))}} thành viên.
                </p>

            </div>
            <div class="col-auto">

                <!-- Buttons -->

                <!-- <a href="#!" class="btn btn-danger btn-sm">
              Rời khỏi lớp
            </a> -->

            </div>
        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12">

                <!-- Divider -->
                <hr class="my-6 my-md-8 border-gray-300">
                <label for="" class="text-primary">Danh sách học sinh tham gia lớp:</label>
                <div class="table-responsive">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Họ và Tên</th>
                                <th scope="col">Ngày tham gia</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=1?>
                        @foreach($joinclass->where('idClass',$id) as $data)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                @foreach($user->where('id',$data->idJoiner) as $val)  <!-- Foreach bởi vì dùng where <> find mặc dù chỉ có 1 truy vấn -->
                                <td>{{$val->name}}</td>
                                @endforeach
                                <td>{{$data->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- / .row -->
                <hr class="my-6 my-md-8 border-gray-300">
        <div class="row">
            <div class="col-12 col-md-12">
            <label for="" class="text-primary">Danh sách đề thi của lớp {{$classroom->name}}</label>


            </div>

        </div> <!-- / .row -->
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên đề</th>
                                <th scope="col">Thời gian làm bài</th>
                                <th scope="col">Số câu đúng</th>
                                <th scope="col">Điểm</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            function nv_number2time( $number ) //Hàm chuyển số giây sang giờ phút giây
                            {
                                     global $lang_global;
                                     $h = 0;
                                    $m = 0;
                                    $s = 0;
                                    $tmp = $number % 3600;
                                    $h = ( $number - $tmp ) / 3600;
                                    $tmp = ( $number - $h * 3600 ) % 60;
                                    $m = ( $number - $h * 3600 - $tmp ) / 60;
                                    $s = $number - ( $h * 3600 + $m * 60 );
                                    if( $h < 10 ) $h = '0' . $h;
                                    if( $m < 10 ) $m = '0' . $m;
                                    if( $s < 10 ) $s = '0' . $s;
                                    return $h . ' giờ ' . $m . ' phút ' . $s.' giây';
                            }
                        ?>
                        <?php 
                            if(is_null($page))
                                $i=1;
                            else $i = 5*($page-1)+1;
                        ?>
                        @foreach($contest as $data)
                            <tr>
                                <th scope="row">{{$i++}}</th>
                                <td>{{$data->name}}</td>
                                <td>{{nv_number2time($data->time*60)}}</td>
                                @if(count($logcontest->where('idClass',$id)->where('idContest',$data->id)->where('idNguoiLam',Auth::user()->id))==0)
                                <td>Chưa làm</td>
                                <td>Chưa làm</td>
                                <td><a class="btn btn-sm btn-danger" href="{{route('lambai',['id'=>$id,'idcontest'=>$data->id])}}">Làm bài</a></td>
                                @elseif($logcontest->where('idClass',$id)->where('idContest',$data->id)->where('idNguoiLam',Auth::user()->id)->first()->lam==0)
                                <td>Chưa làm</td>
                                <td>Chưa làm</td>
                                <td><a class="btn btn-sm btn-danger" href="{{route('lambai',['id'=>$id,'idcontest'=>$data->id])}}">Làm bài</a></td>
                                @else
                                
                                    <td>{{$logcontest->where('idClass',$id)->where('idContest',$data->id)->where('idNguoiLam',Auth::user()->id)->first()->Dung}} / {{count(explode(" ",$data->question))}}</td>
                                    <td>{{$logcontest->where('idClass',$id)->where('idContest',$data->id)->where('idNguoiLam',Auth::user()->id)->first()->diem}} / 10</td>
                                    <td><a class="btn btn-sm btn-danger" href="{{route('result',['id'=>$id,'idcontest'=>$data->id])}}">Chi tiết</a></td>
                                @endif
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $contest->links() }}
                </div>
            </div>

        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>



<!-- JAVASCRIPT
        ================================================== -->
<!-- Libs JS -->

<script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/libs/flickity/dist/flickity.pkgd.min.js"></script>
<script src="./assets/libs/flickity-fade/flickity-fade.js"></script>
<script src="./assets/libs/aos/dist/aos.js"></script>
<script src="./assets/libs/smooth-scroll/dist/smooth-scroll.min.js"></script>
<script src="./assets/libs/jarallax/dist/jarallax.min.js"></script>
<script src="./assets/libs/jarallax/dist/jarallax-video.min.js"></script>
<script src="./assets/libs/jarallax/dist/jarallax-element.min.js"></script>
<script src="./assets/libs/typed.js/lib/typed.min.js"></script>
<script src="./assets/libs/countup.js/dist/countUp.min.js"></script>
<script src="./assets/libs/highlightjs/highlight.pack.min.js"></script>
<script src="./assets/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="./assets/libs/isotope-layout/dist/isotope.pkgd.min.js"></script>
<script src="./assets/libs/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<!-- Map -->
<script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>

<!-- Theme JS -->
<script src="./assets/js/theme.min.js"></script>


</body>

</html>