@extends('web.layouts.app')
@push('style')
<style>
    .navbar{
        background-color: #001a67;
    }
    #Contact {
        background-color: #7cb0ff;
        padding: 120px !important;
    }
    #Videos{padding: 0}
    .row,.container {
        padding: 0
    }
</style>
@endpush
@section('content')
<!-- Videos Section -->
<section id="Videos" class="pt-5">
    <div class="container d-flex flex-column align-items-center justify-content-center gap-5">
      <div class="videoCards d-flex justify-content-between align-items-center gap-1 mt-5">
        <div class="row  mt-4">
          <div class="col-12 col-sm-6 col-lg-3 col-md-4 p-3">
            <div class="videoCard">
              <img src="{{asset('web_files')}}/images/videos/video1.jpg" class="videoImg" alt="">
              <div class="videoTxt position-absolute ">
                <h3>الجزر التربيعي</h3>
                <p>مراجعة على الأسس و شرح الجزر التربيعي</p>
              </div>
              <div class="playButton d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-play fa-lg"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 col-md-4 p-3">
            <div class="videoCard w-100">
              <img src="{{asset('web_files')}}/images/videos/video2.jpg" class="videoImg" alt="">
              <div class="videoTxt position-absolute ">
                <h3>المعادلات</h3>
                <p>شرح المعادلات و حل مسائل</p>
              </div>
              <div class="playButton d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-play fa-lg"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 col-md-4 p-3">
            <div class="videoCard w-100">
              <img src="{{asset('web_files')}}/images/videos/video3.jpg" class="videoImg" alt="">
              <div class="videoTxt position-absolute ">
                <h3>التفاضل الجزئي</h3>
                <p>مراجعة على التفاضل و شرح التفاضل الجزئي</p>
              </div>
              <div class="playButton d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-play fa-lg"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 col-md-4 p-3">
            <div class="videoCard w-100">
              <img src="{{asset('web_files')}}/images/videos/video4.jpg" class="videoImg" alt="">
              <div class="videoTxt position-absolute ">
                <h3>مسائل متنوعة</h3>
                <p>مراجعة على ما سبق</p>
              </div>
              <div class="playButton d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-play fa-lg"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 col-md-4 p-3">
            <div class="videoCard">
              <img src="{{asset('web_files')}}/images/videos/video1.jpg" class="videoImg" alt="">
              <div class="videoTxt position-absolute ">
                <h3>الجزر التربيعي</h3>
                <p>مراجعة على الأسس و شرح الجزر التربيعي</p>
              </div>
              <div class="playButton d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-play fa-lg"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 col-md-4 p-3">
            <div class="videoCard w-100">
              <img src="{{asset('web_files')}}/images/videos/video2.jpg" class="videoImg" alt="">
              <div class="videoTxt position-absolute ">
                <h3>المعادلات</h3>
                <p>شرح المعادلات و حل مسائل</p>
              </div>
              <div class="playButton d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-play fa-lg"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 col-md-4 p-3">
            <div class="videoCard w-100">
              <img src="{{asset('web_files')}}/images/videos/video3.jpg" class="videoImg" alt="">
              <div class="videoTxt position-absolute ">
                <h3>التفاضل الجزئي</h3>
                <p>مراجعة على التفاضل و شرح التفاضل الجزئي</p>
              </div>
              <div class="playButton d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-play fa-lg"></i>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-3 col-md-4 p-3">
            <div class="videoCard w-100">
              <img src="{{asset('web_files')}}/images/videos/video4.jpg" class="videoImg" alt="">
              <div class="videoTxt position-absolute ">
                <h3>مسائل متنوعة</h3>
                <p>مراجعة على ما سبق</p>
              </div>
              <div class="playButton d-flex justify-content-center align-items-center">
                <i class="fa-solid fa-play fa-lg"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
