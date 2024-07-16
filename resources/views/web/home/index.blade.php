@extends('web.layouts.app')
@push('style')
    <link rel="stylesheet" href="{{ env('APP_URL') . asset('web_files') }}/css/style.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') . asset('web_files') }}/css/contact.css" />
@endpush
@section('content')
    <main>
        <section id="hero">
            <div class="container">
                <div class="row justify-content-between align-items-center flex-column flex-lg-row">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center justify-content-lg-start">
                        <div
                            class="main pb-5 d-flex flex-column justify-content-center align-items-center align-items-lg-start">
                            <h1>مرحبــا بـكـم في مـوقـعنــا</h1>
                            <h3>معنا ستكون انطلاقتك في عالم الفيزياء الشيق</h3>
                            <p>كونوا على استعداد للانطلاق 🚀</p>
                            @if (Auth::user())
                                <a class="btn btn-main hero-btn" href=`{{ url('dashboard') }}`">الدخول للمنصة </a>
                            @else
                                <a class="btn btn-main hero-btn" href=`{{ url('login') }}`">ابـــدأ الان </a>
                            @endif
                        </div>
                    </div>
                    <div
                        class="col-lg-6 text-center pt-4 pt-md-0 hero-img-wrapper d-flex justify-content-center justify-content-lg-end">
                        <img src="{{ env('APP_URL') . asset('web_files') }}/images/hero.jpg" width="70%"
                            alt="" />
                    </div>
                </div>
            </div>
            <img src="{{ env('APP_URL') . asset('web_files') }}/images/hero2.png" class="hero-bg" alt="" />
        </section>
        <section id="about" class="pt-5 mt-5">
            <div class="row flex-column flex-md-row justify-content-center justify-content-md-between align-items-center">
                <div class="col-md-6 text-center">
                    <img src="{{ env('APP_URL') . asset('web_files') }}/images/mainr.png" class="about-img"
                        alt="" />
                </div>
                <div class="col-md-6 d-flex align-items-center about">
                    <div class="main me-4">
                        <h2>📌 من نحن</h2>
                        <ul class="pe-5">
                            <li>الأستاذ رجب الباز بكالوريوس علوم وتربية جامعة طنطا قسم الفيزياء</li>
                            <li>دبلوم في التربية المهنيه جامعه بنها</li>
                            <li>ماجستير في الإدارة التربوية جامعة الإسكندرية</li>
                            <li>خبرة في تدريس الفيزياء أكثر من 15عام</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="banner">
            <div class="overlay">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>دروس قد تتعلمها معنا</h2>
                        <p>
                            مُنذُ طفولتنا ونحن نسمع عن ما يُسمى ب ( الكهرباء) في كل مكان
                            وزمان، لكن هل سألت نفسك يومًا كيف أكتُشِفت الكهرباء؟…
                        </p>
                        <a href="" class="btn banner-btn">متابعه التعلم ....</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="freecources">
            <div class="container">
                <h2 class="section-title">اخر الكورسات</h2>
                <div class="row">
                    <div class="col-lg-4 px-2">
                        <div class="course-card">
                            <img src="{{ env('APP_URL') . asset('web_files') }}/images/cources.jpg" class="card-img-top"
                                alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">نظرية كيرشوف</h5>
                                <p class="card-text">
                                    نظرية كيرشوف تحلل الدوائر الكهربائية. تتضمن قانونين للتيار
                                    والجهد. تسهل فهم الدوائر المعقدة.
                                </p>
                                <a href="#" class="btn btn-main">الاشتراك في الكورس</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="lastnews">
            <div class="container">
                <h2 class="section-title">اخر الاخبار</h2>
                <div class="row">
                    <div class="col-6 px-2">
                        <div class="post">
                            <div class="post-header">
                                <img src="{{ env('APP_URL') . asset('web_files') }}/images/cources.jpg"
                                    alt="Profile Picture" class="profile-pic" />
                                <div class="post-info">
                                    <h2 class="post-author">احمد محمد</h2>
                                    <p class="post-time">منذ 3 ساعات</p>
                                </div>
                            </div>
                            <div class="post-content">
                                <p>
                                    تساعد نظرية كيرشوف في تحليل الدوائر الكهربائية. تتكون من
                                    قانونين رئيسيين للتيارات والفولتات. تمكننا هذه القوانين من
                                    فهم سلوك الدوائر المعقدة.
                                </p>
                                <img src="images/cources.jpg" alt="Post Image" class="post-image" />
                            </div>
                            <div class="post-footer">
                                <button class="post-button">اعجاب</button>
                                <button class="post-button" onclick="toggleComments(this)">
                                    تعليق
                                </button>
                                <button class="post-button">مشاركه</button>
                            </div>
                            <hr />
                            <div class="post-comments mt-3 container" style="display: none">
                                <div class="comment">
                                    <img src="images/cources.jpg" alt="Profile Picture" class="comment-profile-pic" />
                                    <div class="comment-text px-3">
                                        <p>
                                            <strong class="d-block">احمد محمد</strong> تعليق على
                                            منشور
                                        </p>
                                        <p class="comment-time">منذ 3 ساعات</p>
                                    </div>
                                </div>
                                <hr />
                                <div class="comment">
                                    <img src="images/cources.jpg" alt="Profile Picture" class="comment-profile-pic" />
                                    <div class="comment-text px-3">
                                        <p>
                                            <strong class="d-block">احمد محمد</strong> تعليق على
                                            منشور
                                        </p>
                                        <p class="comment-time">منذ 3 ساعات</p>
                                    </div>
                                </div>
                            </div>
                            <div class="post-share" style="display: none">
                                <textarea placeholder="كتابه تعليق"></textarea>
                                <button class="share-button">تعليق</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <h2 class="section-title">يسعدنا تواصلك معنا</h2>
                <div class="row contact">
                    <div class="col-lg-4 col-md-12">
                        <div class="contact-single-box">
                            <div class="contact-items">
                                <div class="contact-icon d-flex justify-content-center align-items-center ms-2">
                                    <svg class="svg-inline--fa fa-mobile-screen-button fs-2" aria-hidden="true"
                                        focusable="false" data-prefix="fas" data-icon="mobile-screen-button"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="contact-content">
                                    <h4>رقـــم الهــاتف</h4>
                                    <h6> 1022370583 (20+) </h6>
                                </div>
                            </div>
                            {{-- <div class="contact-items">
                                <div class="contact-icon d-flex justify-content-center align-items-center">
                                    <svg class="svg-inline--fa fa-envelope fs-2" aria-hidden="true" focusable="false"
                                        data-prefix="far" data-icon="envelope" role="img"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z">
                                        </path>
                                    </svg>
                                </div>
                                <div class="contact-content">
                                    <h4>البــريــد الإلكترونـــي</h4>
                                    <h6>info@ragabelbaz.net</h6>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <div class="contact-box">
                            <div class="contact-box-title">
                                <h4>تواصل معنا الآن</h4>
                            </div>
                            @include('web.includes.message')
                            <form class="row justify-content-center align-items-center flex-column g-3"
                                action="{{ url('addMessage') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-box">
                                            <input type="text" name="name" placeholder="الاســــم" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box">
                                            <input type="text" name="email"
                                                placeholder="البــريــد الإلكـــتروني" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box">
                                            <input type="text" name="phone" placeholder="رقــم الهاتف" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-box">
                                            <textarea name="messege" id="messege" cols="30" rows="10" placeholder="الرسالة"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="">
                                            <button type="submit" class="btn btn-main">
                                                إرسال
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div id="status"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @push('script')
        <script>
            function toggleComments(button) {
                var post = button.closest(".post"); // Find the closest post container
                var commentsSection = post.querySelector(".post-comments"); // Find comments section within the post
                commentsSection.style.display =
                    commentsSection.style.display === "none" ||
                    commentsSection.style.display === "" ?
                    "block" :
                    "none";
                var shareSection = post.querySelector(".post-share"); // Find comments section within the post
                shareSection.style.display =
                    shareSection.style.display === "none" ||
                    shareSection.style.display === "" ?
                    "flex" :
                    "none";
            }
        </script>
    @endpush
@endsection
