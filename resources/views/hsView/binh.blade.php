@include('include.hsheader')


    <!-- WELCOME
        ================================================== -->
    <section class="pt-4 pt-md-10 mb-5" data-aos="fade-up">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-12 shadow-dark-lg">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h3 class="card-title text-body">Xin chào, <span class="text-primary">{{Auth::user()->name}}</span></h3>
                                <p class="card-text">
                                    Chào mừng bạn đến với BLContest, hệ thống chấm trắc nghiệm tự động. Hướng dẫn sử dụng: 
                                </p>
                                <div class="mt-5 list-group list-group-flush">
                                  <div class="list-group-item d-flex align-items-center" data-toggle="modal" href="#modalSignupHorizontal">
                                    
                                    <!-- Text -->
                                    <div class="mr-auto" data-aos="fade-left" data-aos-delay="250">
                                      
                                      <!-- Heading -->
                                      <p class="font-weight-bold mb-1">
                                        Tham gia lớp học
                                      </p>

                                      <!-- Text -->
                                      <p class="font-size-sm text-muted mb-0">
                                        Tham gia 1 lớp học bằng mã giáo viên cấp cho bạn, từ đó bạn có thể xem thông tin lớp học và làm bài tập.
                                      </p>

                                    </div>
                                      
                                    <!-- Check -->
                                    <div class="badge badge-rounded-circle badge-success-soft ml-4">
                                      <i class="fe fe-check"></i>
                                    </div>

                                  </div>
                                  <div class="list-group-item d-flex align-items-center" onclick="window.location='{{route('findClass')}}'">
                                      
                                    <!-- Text -->                
                                    <div class="mr-auto" data-aos="fade-right" data-aos-delay="250">
                                      
                                      <!-- Heading -->
                                      <p class="font-weight-bold mb-1">
                                        Tìm kiếm lớp học
                                      </p>

                                      <!-- Text -->
                                      <p class="font-size-sm text-muted mb-0">
                                        Sau khi tham gia lớp học bạn có thể tìm kiếm những lớp học mình đã tham gia. Và bắt đầu làm bài.
                                      </p>

                                    </div>
                                      
                                    <!-- Check -->
                                    <div class="badge badge-rounded-circle badge-success-soft ml-4">
                                      <i class="fe fe-check"></i>
                                    </div>

                                  </div>
                                  <div class="list-group-item d-flex align-items-center">
                                      
                                    <!-- Text -->
                                    <div class="mr-auto" data-aos="fade-left" data-aos-delay="250">
                                      
                                      <!-- Heading -->
                                      <p class="font-weight-bold mb-1">
                                        Contact
                                      </p>

                                      <!-- Text -->
                                      <p class="font-size-sm text-muted mb-0">
                                        Mọi khó khăn, thắc mắc vui lòng liên hệ: <a target="_blank" href="https://fb.me/binh27112004">Admin Facebook</a>
                                      </p>

                                    </div>
                                      
                                    <!-- Check -->
                                    <div class="badge badge-rounded-circle badge-success-soft ml-4">
                                      <i class="fe fe-check"></i>
                                    </div>

                                  </div>
                                  
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>
    <div class="row mt-5">   </div>


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
    <script>setInterval(()=>{document.getElementById("modalSignupHorizontalEmail").focus();},100);</script>
    <!-- Map -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Theme JS -->
    <script src="./assets/js/theme.min.js"></script>


</body>

</html>