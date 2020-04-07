@include('include.hsheader')
<script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>
<script>new ClipboardJS('.binh');</script>
<!-- WELCOME
        ================================================== -->
<section data-jarallax data-speed=".8" class="py-10 py-md-14 overlay overlay-black overlay-60 bg-cover jarallax"
    style="background-image: url(assets/img/covers/2730921.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-7 text-center">

                <!-- Heading -->
                <h1 class="display-2 font-weight-bold text-white">
                    Tìm kiếm lớp học
                </h1>

                <!-- Text -->
                <p class="lead mb-0 text-white-75">
                    Tìm kiếm lớp học bạn đã tham gia.
                </p>

            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>

<!-- SHAPE
    ================================================== -->
<div class="position-relative">
    <div class="shape shape-bottom shape-fluid-x svg-shim text-light">
        <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor" />
        </svg>
    </div>
</div>

<!-- SEARCH
    ================================================== -->
<section class="mt-n6">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Form -->
                <form class="rounded shadow mb-4" method="post" action="{{route('findClass')}}" autocomplete="off">
                    @csrf
                    <div class="input-group input-group-lg">

                        <!-- Prepend -->
                        <div class="input-group-prepend">
                            <span class="input-group-text border-0 pr-1">
                                <i class="fe fe-search"></i>
                            </span>
                        </div>

                        <!-- Input -->
                        <input value="@if(isset($search)) {{$search}} @endif" name="search" type="text"
                            class="form-control border-0 px-1" aria-label="Tìm kiếm lớp học...."
                            placeholder="Tìm kiếm lớp học....">

                        <!-- Append -->
                        <div class="input-group-append">
                            <span class="input-group-text border-0 py-0 pl-1 pr-3">
                                <button class="btn btn-sm btn-primary" type="submit">
                                    Search
                                </button>
                            </span>
                        </div>

                    </div>
                </form>


            </div>
        </div> <!-- / .row -->
    </div>
</section>

<!-- ARTICLES
    ================================================== -->
<section class="pt-7 pt-md-10">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(isset($class))
                @if(count($class)==0)
                <div class="mb-10" style="width:100%;text-align:center;">
                    <h2 class="text-primary"> Không tìm thấy lớp này hoặc bạn chưa tham gia :(</h2>
                </div>
                @endif
                @foreach($class as $data)
                <!-- Card -->
                <div class="card card-row shadow-light-lg mb-6 lift lift-lg">
                    <div class="row no-gutters">
                        <div class="col-12">

                            <!-- Badge -->
                            <span class="badge badge-pill badge-light badge-float badge-float-inside">
                                <span class="h6 text-uppercase">Class</span>
                            </span>

                        </div>
                        <a class="col-12 col-md-6 order-md-2 bg-cover card-img-right"
                            style="background-image: url(assets/img/covers/2720246.png);" href="javascript:void(0) ">

                            <!-- Image (placeholder) -->
                            <img src="assets/img/covers/2720246.png" alt="..." class="img-fluid d-md-none invisible">

                            <!-- Shape -->
                            <div class="shape shape-left shape-fluid-y svg-shim text-white d-none d-md-block">
                                <svg viewBox="0 0 112 690" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.14577e-06 0H62.7586V172C38.6207 384 112 517 112 517V690H2.14577e-06V0Z"
                                        fill="currentColor" />
                                </svg>
                            </div>

                        </a>

                        <div class="col-12 col-md-6 order-md-1">

                            <!-- Body -->
                            <a class="card-body" href="javascript:void(0)">

                                <!-- Heading -->
                                <h3>
                                    Lớp {{$data->name}}.
                                </h3>
                                <!-- Text -->
                                <p class="mb-0 text-muted">
                                    Lớp được tạo bởi giáo viên <span
                                        class="text-primary">{{$user->find($data->id_create)->name}}</span>.
                                    Với mã code {{$data->code}} <span class="text-primary binh"
                                        data-clipboard-text="{{$data->code}}" style="display:inline;"
                                        onclick="alert('Đã sao chép mã lớp học này'); ">
                                        <svg version="1.1" width="25px" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                            xml:space="preserve">
                                            <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="43.9554"
                                                y1="258.0571" x2="467.9564" y2="258.0571"
                                                gradientTransform="matrix(1.0001 0 0 -1.0001 0.0071 514.0944)">
                                                <stop offset="0" style="stop-color:#00F2FE" />
                                                <stop offset="0.021" style="stop-color:#03EFFE" />
                                                <stop offset="0.293" style="stop-color:#24D2FE" />
                                                <stop offset="0.554" style="stop-color:#3CBDFE" />
                                                <stop offset="0.796" style="stop-color:#4AB0FE" />
                                                <stop offset="1" style="stop-color:#4FACFE" />
                                            </linearGradient>
                                            <path style="fill:url(#SVGID_1_);" d="M386.908,128.019c0,11.048-8.955,20.003-20.003,20.003h-141.91
	c-11.048,0-20.003-8.955-20.003-20.003s8.955-20.003,20.003-20.003h141.91C377.952,108.016,386.908,116.971,386.908,128.019z
	 M386.908,208.03c0-11.048-8.955-20.003-20.003-20.003h-141.91c-11.048,0-20.003,8.955-20.003,20.003s8.955,20.003,20.003,20.003
	h141.91C377.952,228.033,386.908,219.078,386.908,208.03z M224.996,268.039c-11.048,0-20.003,8.955-20.003,20.003
	c0,11.048,8.955,20.003,20.003,20.003h61.009c11.048,0,20.003-8.955,20.003-20.003c0-11.048-8.955-20.003-20.003-20.003H224.996z
	 M428.025,252.036V80.012c0-22.059-17.947-40.006-40.006-40.006H203.993c-22.059,0-40.006,17.947-40.006,40.006v272.024
	c0,10.689,4.163,20.735,11.721,28.291c7.556,7.555,17.601,11.715,28.285,11.715h0.009l184.027-0.045
	c22.054-0.005,39.996-17.952,39.996-40.006c0-11.048,8.955-20.003,20.003-20.003s20.003,8.955,20.003,20.003
	c0,40.728-30.596,74.452-70.01,79.389v0.608c0,44.118-35.893,80.012-80.012,80.012H123.98c-44.118,0-80.012-35.893-80.012-80.012
	V159.949c0-44.118,35.893-80.012,80.012-80.012l0,0C124.021,35.853,159.899,0,203.993,0H388.02
	c44.118,0,80.012,35.893,80.012,80.012v172.025c0,11.048-8.955,20.003-20.003,20.003S428.025,263.084,428.025,252.036z
	 M147.423,408.62c-15.116-15.112-23.441-35.208-23.441-56.583V119.943c-22.059,0-40.006,17.947-40.006,40.006v272.039
	c0,22.059,17.947,40.006,40.006,40.006h194.028c22.052,0,39.994-17.935,40.006-39.984l-154.002,0.038h-0.02
	C182.623,432.047,162.536,423.729,147.423,408.62z" />

                                        </svg></span> , lớp được tạo vào {{$data->created_at}}. <br>

                                    <button class="btn btn-primary btn-sm mt-3"
                                        onclick="window.location='{{route('viewClass',$data->id)}}'">Xem</button>

                                </p>

                            </a>

                            <!-- Meta -->
                            <a class="card-meta" href="#!">

                                <!-- Divider -->
                                <hr class="card-meta-divider">

                                <!-- Avatar -->


                                <!-- Date -->
                                <p class="h6 text-uppercase text-muted mb-0 ml-auto">
                                    <time datetime="2019-05-02">{{count($joinclass->where('idClass',$data->id))}}
                                        Member(s)</time>
                                </p>

                            </a>

                        </div>

                    </div> <!-- / .row -->
                </div>
                @endforeach
                @else
                <div class="mb-10" style="width:100%;text-align:center;">
                    <h2 class="text-primary"> Bạn chưa tham gia vào lớp học nào cả :(</h2>

                </div>
                @endif
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>


<!-- JAVASCRIPT
        ================================================== -->
<!-- Libs JS -->
<script src="./assets/libs/jquery/dist/jquery.min.js"></script>
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
<script>

</script>

</body>

</html>