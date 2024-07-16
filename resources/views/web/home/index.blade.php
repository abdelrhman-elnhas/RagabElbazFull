@extends('web.layouts.app')
@push('style')
<link rel="stylesheet" href="{{asset('web_files')}}/assets/Animate/css/animate.css">
@endpush
@section('content')
<main>
  <!-- Hero Section -->
  <section id="Hero" class="hero">
    <div class="container d-flex justify-content-start align-items-center">
      <svg class="blobContainer" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <path fill="#eee" d="M34.5,-58.2C47,-52.5,61.2,-48,68.5,-38.5C75.9,-29,76.5,-14.5,74,-1.4C71.5,11.6,66,23.3,59.3,33.9C52.6,44.5,44.7,54.1,34.6,58.6C24.5,63.1,12.2,62.6,-2.1,66.2C-16.4,69.8,-32.8,77.5,-45.4,74.5C-58,71.4,-66.8,57.5,-67.2,43.3C-67.6,29.1,-59.5,14.5,-60.5,-0.6C-61.5,-15.7,-71.6,-31.4,-67.5,-39.3C-63.5,-47.1,-45.3,-47.1,-31.7,-52.2C-18.1,-57.3,-9.1,-67.6,1,-69.2C11,-70.9,21.9,-63.9,34.5,-58.2Z" transform="translate(100 100)" />
      </svg>
      <img class="hero-img" src="{{asset('web_files')}}/images/hero.png" />
      <div class="heroContent text-white">
        <p class="subTxt">
          متعة تعلم
        </p>
        <h1 class="mainTxt">الرياضيات</h1>
        @if(Auth::user())
          <button class="heroBtn d-flex align-items-center" onclick="window.location.href=`{{url('dashboard')}}`">
            <i class="ms-3 fa-solid fa-right-to-bracket" style="color:#0049ab "></i> الدخول للموقع
          </button>
        @else
          <button class="heroBtn d-flex align-items-center" onclick="window.location.href=`{{url('login')}}`">
            <i class="ms-3 fa-solid fa-right-to-bracket" style="color:#0049ab "></i> أبدأ رحلتــك الآن
          </button>
        @endif
      </div>
    </div>
  </section>
  <!-- About Section -->
  <section class="d-flex justify-content-center align-items-center pt-5" id="About">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-5">
      <div class="col-12 col-md-6 w-md-75">
        <div class="aboutContent">
          <h1>نبذة تعريفية</h1>
          <h2>أ/ محمد النجار</h2>
          <ul>
            <li>معلم خبير رياضيات</p>
            <li>حاصل على بكالوريوس علوم رياضيات و ماجستير في حساب المثلثات و دبلومة في شرح الرياضيات</p>
            <li>خبرة أكثر من 25 سنة في المرحلة الثانوية</p>
          </ul>
        </div>
      </div>
      <div class="photo col-12 col-md-6 position-relative">
        <img src="{{asset('web_files')}}/images/dots.png" class="img-fluid dotsOne position-absolute " alt="">
        <img src="{{asset('web_files')}}/images/dots.png" class="img-fluid dotsTwo position-absolute " alt="">
        <img src="{{asset('web_files')}}/images/teacher.jpg" class="img-fluid" alt="">
      </div>
    </div>
  </section>

  <!-- Videos Section -->
  <section id="Videos">
    <div class="container d-flex flex-column align-items-center justify-content-center gap-5">
      <div class="d-flex align-items-center justify-content-center position-relative">
        <h2 class="videosTitle">الفيديوهات المجانية</h2>
        <img src="{{asset('web_files')}}/images/kodak.png" class="img-fluid kodakOne" alt="kodak">
        <img src="{{asset('web_files')}}/images/kodak.png" class="img-fluid kodakTwo" alt="kodak">
      </div>
      <div class="videoCards d-flex justify-content-between align-items-center gap-1 mt-5">
        <div class="row">
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

  <!-- Contact Section -->
  <section id="Contact">
    <div class="card d-flex align-items-center justify-content-center">
      <h2>تواصل معنا</h2>
      @include('web.includes.message')
      <form class="row justify-content-center align-items-center flex-column g-3" action="{{url('addMessage')}}" method="POST">
        @csrf
        <input class="col-12" type="text" placeholder="اسم المستخدم" name="username">
        <input class="col-12" type="number" placeholder="رقم التليفون" name="phone">
        <textarea class="col-12" type="textarea" cols="60" rows="6" placeholder="اترك رسالتك هنا ..." name="message" required></textarea>
        <button class="contact-btn btn" type="submit">ارسال</button>
      </form>
    </div>
  </section>
</main>
@push('script')
<script src="{{asset('web_files')}}/assets/Animate/js/wow.min.js"></script>
<script>
  new WOW().init();
</script>
@endpush
@endsection
