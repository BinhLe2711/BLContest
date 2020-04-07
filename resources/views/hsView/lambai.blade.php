@include('include.hsheader')

<section class="pt-8 pt-md-11 mb-10">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="col-12 mb-4 " style="width:100%;text-align:center;">
                    <h3>Thời gian: <span class="text-primary time"> Loading...</span> </h3>
                </div>
            <div class="card shadow-dark lift">
              <div class="card-body">
              <div class="progress mb-5" style="height:10px;">
                  <div class="progress-bar" role="progressbar" style="width: 0%;"aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <form action="{{route('lambai',['id'=>$id,'idcontest'=>$idcontest])}}" method="POST">
                    @csrf
                <div class="flickity-button-outset"  data-flickity='{"draggable": false,"pageDots": false,"wrapAround": true, "imagesLoaded": true}'>
                    <?php $i=1; ?>
                    @foreach($allQuestion as $data)
                    <div class="wrap-question col-12">
                        <h3 class="card-title text-body">Câu {{$i++}}: </h3>
                        <p class="card-text">
                        {!! $data->question !!}
                        </p>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="{{$data->custom}}" id="{{$i}}a" value="A">
                            <label class="form-check-label" for="{{$i}}a">
                              A. {!!$data->A!!}
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="{{$data->custom}}" id="{{$i}}b" value="B">
                            <label class="form-check-label" for="{{$i}}b">
                              B. {!! $data->B !!}
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="{{$data->custom}}" id="{{$i}}c" value="C">
                            <label class="form-check-label" for="{{$i}}c">
                              C. {!! $data->C !!}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="{{$data->custom}}" id="{{$i}}d" value="D">
                            <label class="form-check-label" for="{{$i}}d">
                              D. {!! $data->D !!}
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
                <br>
                <div class="col-12 mb-2 pt-5" style="width:100%;text-align:center;">
                    
                    <button type="submit" class="btn btn-primary btn-sm nopbai">Nộp bài</button>
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
        function nv_number2time(totalSeconds){
            return new Date(totalSeconds * 1000).toISOString().substr(11, 8);
        }
        var _0x1c61=['.time','.nopbai','click','html'];(function(_0x4a64ac,_0x1c614c){var _0x4d8656=function(_0x4c3088){while(--_0x4c3088){_0x4a64ac['push'](_0x4a64ac['shift']());}};_0x4d8656(++_0x1c614c);}(_0x1c61,0x19c));var _0x4d86=function(_0x4a64ac,_0x1c614c){_0x4a64ac=_0x4a64ac-0x0;var _0x4d8656=_0x1c61[_0x4a64ac];return _0x4d8656;};var binhlanguoideptrainhatvutrunay={{$contest->time*60-1}};setInterval(()=>{$(_0x4d86('0x0'))[_0x4d86('0x3')](nv_number2time(binhlanguoideptrainhatvutrunay));binhlanguoideptrainhatvutrunay--;if(binhlanguoideptrainhatvutrunay==0x0)$(_0x4d86('0x1'))[_0x4d86('0x2')]();},0x3e8);
    }); 
   
    
</script>

</body>

</html>