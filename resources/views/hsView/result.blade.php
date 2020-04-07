@include('include.hsheader')
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
                        Bạn chọn {{$data->answer}}, Đáp án {{$data->correct}}
                        @else
                        Không chọn, Đáp án {{$data->correct}}
                        @endif
                    </div>
                    @endforeach
                </div>
                <br>
                <div class="col-12 mb-2 pt-5" style="width:100%;text-align:center;">
                    
                    <a  class="btn btn-primary btn-sm nopbai" href="{{route('viewClass',$id)}}">Quay lại</a>
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