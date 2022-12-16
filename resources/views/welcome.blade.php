@extends('layouts.main')

@section('title')
LIST - SONG
@endsection

@section('content')


    <!-- ##### Latest Albums Area Start ##### -->
    <section class="latest-albums-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="ablums-text text-center mb-70">
                        <p></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="albums-slideshow owl-carousel">
                        @if(count($musics) > 0)
                        @foreach($musics as $music)
                        <a href="{{url('/music/'.$music->slug)}}">
                        <div class="single-album wow fadeInUp" data-wow-delay="200ms">
                        <img src="images/thumbnails/{{$music->image}}" alt="">
                            <div class="album-info">

                                <h6>{{Str::limit($music->title, 20)}}</h6>

                            <p>{{$music->artist}}</p>
                            </div>
                        </div></a>
                        @endforeach

                        @endif


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Latest Albums Area End ##### -->

</div>
<!--End Containe-->

@if(count($albums) > 0)
    <!-- ##### Buy Now Area Start ##### -->
    <section class="oneMusic-buy-now-area has-fluid bg-gray section-padding-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <p></p>
                        <h2>NEW ALBUMS</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Album Area -->
      @foreach($albums as $album)
      <div class="col-6 col-sm-6 col-md-4  wow fadeInUp" data-wow-delay="200ms">
        <a href="{{url('/album/'.$album->slug)}}">
             <div class="shadow single-album-area">
                <div class="album-thumb">
                <img src="{{url('/images/thumbnails/'.$album->image)}}" alt="">
                </div>
                <div class="album-info p-4">
                        <h5>{{Str::limit($album->name, 20)}}</h5>
                    <p>{{$album->year}}</p>
                </div>
            </div>
        </a>
        </div>
@endforeach

            </div>

            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn text-center wow fadeInUp" data-wow-delay="300ms">
                    <a href="{{url('/albums')}}" class="btn oneMusic-btn">see more <i class="fa fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Buy Now Area End ##### -->
@endif


@if(count($musics) > 0)
    <!-- ##### Featured Artist Area Start ##### -->
    <section class="mb-4 featured-artist-area section-padding-50 bg-img bg-overlay bg-fixed" style="background-image: url(img/bg-img/breadcumb6.jpg);">
        <div class="container wow bounceInDown" data-wow-delay="200ms">
            <div class="row align-items-end">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="featured-artist-thumb text-center">
                    <img src="images/thumbnails/{{$latest->image}}" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="featured-artist-content">
                        <!-- Section Heading -->
                        <div class="section-heading white text-left mb-30">
                            <p>New Song</p>
                        <h2>{{$latest->title}}</h2>
                        </div>
                    <p>{{$latest->content}}</p>
                        <div class="song-play-area">
                            <div class="song-name">
                            <p>{{$latest->title}}</p>
                            </div>
                            <audio preload="auto" controls>
                            <source src="songs/{{$latest->song}}">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <!-- ##### Featured Artist Area End ##### -->


 <!-- ##### Newsletter & Testimonials Area Start ##### -->
 <section class="newsletter-testimonials-area">
    <div class="container">
        <div class="row">

            <!-- Newsletter Area -->
            <div class="col-12 col-lg-6">
                <div class="newsletter-area mb-100">
                    <div class="section-heading text-left mb-50">
                        <p>What's new? </p>
                        <h2>Sign up to receive news!</h2>
                    </div>
                    <div class="newsletter-form">
                        <form action="#" id="subscribeform">
                            <input type="email" name="email" id="email" placeholder=" E-mail">
                            <button type="submit" class="btn oneMusic-btn">REGISTER <i class="fa fa-angle-double-right"></i></button>
                        </form><br><br>
                    </div>
                </div>
            </div>

            <!-- Testimonials Area -->
            <div class="col-12 col-lg-6">
                <div class="testimonials-area mb-100 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-3.jpg);">
                    <div class="section-heading white text-left mb-50">
                        <p></p>
                        <h2></h2>
                    </div>
                    <!-- Testimonial Slide -->
                    <div class="testimonials-slide owl-carousel">
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <p>"Người ta không quý con ong, mà người ta chỉ quý mật.
Em hỏi sao nhạc anh hay, anh gọi nó là bí thuật!"
                            </p>
                            <div class="testimonial-info d-flex align-items-center">
                                <div class="testimonial-thumb">
                                    <img src="img/bg-img/den.jpg" alt="">
                                </div>
                                <p>– Đen Vâu</p>
                            </div>
                        </div>
                        <!-- Single Slide -->
                        <div class="single-slide">
                            <p>“Sống mà cứ hoài nghi, như tự mình nhảy vào trong cát lún

Thay vì thoát ra, mà lại cố để kéo người khác xuống

Cuộc đời này đủ phức tạp, đừng có nghĩ quá xa xôi

Những chuyện buồn thì buông hết, điều tốt đẹp chớ phai phôi”

                            </p>
                            <div class="testimonial-info d-flex align-items-center">
                                <div class="testimonial-thumb">
                                    <img src="img/bg-img/den.jpg" alt="">
                                </div>
                                <p>-Đen Vâu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### Newsletter & Testimonials Area End ##### -->



    <!-- ##### Contact Area Start ##### -->
    {{-- <section class="contact-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        
                        <h2>Contact</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form Area -->
                    <div class="contact-form-area  wow fadeInUp" data-wow-delay="200ms">
                        <form id="contactform">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Họ & Tên" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="from" placeholder="E-mail" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="SĐT" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" name="message" id="message" cols="30" rows="10" placeholder="Ghi chú" required></textarea>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn oneMusic-btn mt-30" type="submit">Gửi <i class="fa fa-angle-double-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ##### Contact Area End ##### -->



    <!--Script--->

   <script>
   $('#subscribeform').submit((e)=>{
    e.preventDefault();
    $("#loading").show()
    let email = $('#email').val();
    $.ajax({
        type: 'POST',
        data: {
            email: email
        },
        url: '{{url('/api/newsletter/subcribe')}}',
        success: (response)=>{
            $("#loading").hide()
            console.log(response)
        if(response.status =="success"){
        $('#subcribeform').trigger('reset');
        toastr.success('Thank you for registering')
        }
        else{
        toastr.warning(response.message)
        }

        },
        error: (error)=>{
            let errors = error.responseJSON.errors;
                         $("#loading").hide()
                         $.each(errors, (key, value)=>{
                            window.msgs = value
                         });
                         toastr.error(window.msgs, 'Registration failed!')
        }
    })
    //End of ajax
    //End of form submit
    })



   $('#contactform').submit((e)=>{
    e.preventDefault();
    $("#loading").show()
    let data = $('#contactform').serialize();
    $.ajax({
        type: 'POST',
        data: data,
        url: '{{url('/api/sendmail')}}',
        success: (response)=>{
        $('#contactform').trigger('reset');
        $("#loading").hide()
        toastr.success('I will be right back', 'Message has been sent!')
        },
        error: (error)=>{
            let errors = error.responseJSON.errors;
                         $("#loading").hide()
                         $.each(errors, (key, value)=>{
                            window.msgs = value
                         });
                         toastr.error(window.msgs, 'Message has not been sent')
                         toastr.error('Could not connect!', 'Message has not been sent')
        }
    })
    //End of ajax
    //End of form submit
    })
    </script>
@endsection


