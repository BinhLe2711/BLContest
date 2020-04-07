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
<style>
    .text-danger{
        color:red!important;
    }
    .text-success{
        color:green!important;
    }
</style>
<section class="pt-8 pt-md-11 mb-10">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="col-12 mb-4 " style="width:100%;text-align:center;">
                </div>
            <div class="card shadow-dark lift">
              <div class="card-body">
              <div class="progress mb-5" style="height:10px;">
                  <div class="progress-bar" role="progressbar" style="width: 0%;"aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                
                <div class="flickity-button-outset"  data-flickity='{"draggable": false,"pageDots": false,"wrapAround": true, "imagesLoaded": true}'>
                    <?php $i=1; ?>
                    @foreach($result as $data)
                    
                    <div class="wrap-question col-12">
                        <h3 class="card-title text-body">Câu {{$i++}}: </h3>
                        <p class="card-text">
                        {!! $data->question !!}
                        </p>
                        <div class="form-check mb-3">
                            <input class="form-check-input" disabled  type="radio" @if($data->answer == 'A') checked @endif name="{{$data->custom}}" id="{{$i}}a" value="A">
                            <label class="form-check-label @if($data->answer== 'A') text-danger @endif @if($data->correct== 'A') text-success @endif" for="{{$i}}a" >
                            <b>A. {!!$data->A!!}</b>
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" disabled type="radio" @if($data->answer == 'B') checked @endif name="{{$data->custom}}" id="{{$i}}b" value="B">
                            <label class="form-check-label @if($data->answer== 'B') text-danger @endif @if($data->correct== 'B') text-success @endif" for="{{$i}}b">
                             <b>B. {!! $data->B !!}</b> 
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" disabled type="radio" @if($data->answer == 'C') checked @endif name="{{$data->custom}}" id="{{$i}}c" value="C">
                            <label class="form-check-label @if($data->answer== 'C') text-danger @endif @if($data->correct== 'C') text-success @endif" for="{{$i}}c">
                             <b>C. {!! $data->C !!}</b>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" disabled type="radio" @if($data->answer == 'D') checked @endif name="{{$data->custom}}" id="{{$i}}d" value="D">
                            <label class="form-check-label @if($data->answer== 'D') text-danger @endif @if($data->correct== 'D') text-success @endif" for="{{$i}}d">
                            <b>D. {!! $data->D !!}</b>
                            </label>
                        </div>
                        <hr>
                        @if($data->answer!='E')
                        Học sinh chọn {{$data->answer}}, Đáp án {{$data->correct}}
                        @else
                        Không chọn, Đáp án {{$data->correct}}
                        @endif
                    </div>
                    @endforeach
                </div>
                <br>
                <div class="col-12 mb-2 pt-5" style="width:100%;text-align:center;">
                    
                    <a  class="btn btn-primary btn-sm nopbai" href="{{route('detailClassroom',$id)}}">Quay lại</a>
                </div>
                </form>
              </div>
            </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
<style>
.flickity-prev-next-button.previous{
    position: absolute;
    left:-15%;
}
.flickity-prev-next-button.next{
    position: absolute;
    right:-15%;
}
</style>
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
    
    $(document).ready(function(){  
        var numQues = {{$i}}-1;
        var current = 1;
        $('.progress-bar').css('width',(1/numQues)*100+'%');
        $('.flickity-prev-next-button.previous').click(()=>{
            current--;
            if(current==0)current = numQues;
            let percent = (current/numQues)*100;
            $('.progress-bar').css('width',percent+'%');
        });
        $('.flickity-prev-next-button.next').click(()=>{
            current++;
            if(current==numQues+1)current = 1;
            let percent = (current/numQues)*100;
            $('.progress-bar').css('width',percent+'%');
        });
    }); 
   
    
</script>

</body>

</html>