@extends('web.layouts.app2')
@push('style')
    <link rel="stylesheet" href="{{ env('APP_URL') . asset('web_files') }}/css/userDash.css" />
@endpush
@section('content')
    {{-- <main>
  <div class="cover" style=""></div>
  <section id="main">
    <div class="row">
      <div class="col-md-12 col-lg-3 main_bg">
        <div class="nav flex-column nav-pills text-center" id="tablist" role="tablist" aria-orientation="vertical">
          <div class="main">
            <p>{{Auth::user()->category ? Auth::user()->category->category_name : ''}}</p>
          </div>
          <a class="nav-link active mt-4" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
            اقسام المنهج</a>
          <a class="nav-link" id="nav-exams-tab" data-bs-toggle="tab" data-bs-target="#nav-exams" type="button" role="tab" aria-controls="nav-exams" aria-selected="false">الامتحانات الشاملة</a>
          <a class="nav-link" id="nav-records-tab" data-bs-toggle="tab" data-bs-target="#nav-records" type="button" role="tab" aria-controls="nav-records" aria-selected="false">الصوتيات</a>
          <a class="nav-link" id="nav-books-tab" data-bs-toggle="tab" data-bs-target="#nav-books" type="button" role="tab" aria-controls="nav-books" aria-selected="false">
            الملخصات
          </a>
          <a class="nav-link" id="nav-lives-tab" data-bs-toggle="tab" data-bs-target="#nav-lives" type="button" role="tab" aria-controls="nav-lives" aria-selected="false">البث المباشر</a>
        </div>
      </div>
      <!-- slides -->
      <div class="p-1 p-md-2 p-lg-5 col-md-12 col-lg-9 tab-content p-0" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="container">
            <div class="row text-center">
              @forelse ($categories as $category)
              <div class="col-md-6 col-lg-6 mb-2">
                <div class="card w-100">
                  <img src="{{$category->image}}" class="card-img-top" alt="..." />
                  <div class="card-body">
                    <h4 class="card-title">{{$category->category_name}}</h4>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($category->category_description, 100, $end='...') }}</p>
                    <a class="original-button" href="{{url('lessons/lesson/'.$category->id)}}">الذهاب للقسم</a>
                  </div>
                </div>
              </div>
              @empty
              <div class="alert alert-danger" role="alert">
                لا يوجد اقسام بعد
              </div>
              @endforelse
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-exams" role="tabpanel" aria-labelledby="nav-exams-tab">
          <div class="container">
            <div class="table-responsive">
              <table class="table table-bordered text-center">
                <thead>
                  <tr>
                    <th scope="col">الامتحان</th>
                    <th scope="col">تاريخ الامتحان</th>
                    <th scope="col">نوع الامتحان</th>
                    <th scope="col">الذهاب الامتحان</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($fullExams as $fullExam)
                  <tr>
                    <td> {{$fullExam->exam_name}}</td>
                    <td> {{$fullExam->time_ago}}</td>
                    <td>
                      @if ($fullExam->type == 1)
                      <label class="bg-primary text-light" style="font-size: 15px;">على المنصة</label>
                      @else
                      <label class="bg-success text-light" style="font-size: 15px;">امتحان برابط</label>
                      @endif
                    </td>
                    <td>
                      @if ($fullExam->type == 1)
                      <a href="{{url('exams/full_exam/'.$fullExam->id)}}">الذهاب للامتحان</a>
                      @else
                      <a href="{{$fullExam->exam_desc}}">الذهاب للامتحان</a>
                      @endif
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="4">لا يوجد امتحانات شاملة الان </td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-books" role="tabpanel" aria-labelledby="nav-books-tab">
          <div class="container">
            <div class="table-responsive">
              <table class="table table-bordered text-center">
                <thead>
                  <tr>
                    <th scope="col">اسم الملخص</th>
                    <th scope="col">تاريخ الملخص</th>
                    <th scope="col">الملخص</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($quotes as $quote)
                  <tr>
                    <td>{{$quote->description}}</td>
                    <td>{{$quote->time_ago}}</td>
                    <td>
                      <a href="{{$quote->image}}">تحميل</a>
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="3">لا يوجد ملخصات</td>
                  </tr>
                  @endforelse


                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-lives" role="tabpanel" aria-labelledby="nav-lives-tab">
          <div class="container">
            <div class="table-responsive">
              <table class="table table-bordered text-center">
                <thead>
                  <tr>
                    <th scope="col">تاريخ البث</th>
                    <th scope="col">الذهاب للبث</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($lives as $live)
                  <tr>
                    <td> {{$live->time_ago}}</td>
                    <td><a href="{{$live->link}}">الذهاب للبث</a></td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2"> لا يوجد بث مباشر</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main> --}}

    <main class="d-flex align-items-center justify-content-center flex-column">
        <section class="dashNav d-flex align-items-center justify-content-center mb-5">
            <div class="dashNavOverlay"></div>
            <div class="container d-flex flex-column align-items-center justify-content-center py-5">
                <div class="user-img p-2 d-flex align-items-center justify-content-center flex-column">
                    <img src="{{ env('APP_URL') . asset('web_files') }}/images/mainr.png" width="200px" height="200px"
                        alt="" />
                    <h3 class="userName">عبدالرحمن النحاس</h3>
                </div>
                <div class="col-12 p-2">
                    <div class="nav-wrapper d-flex align-items-center justify-content-center">
                        <button class="nav-btn courses-tab active">كورساتي 📖</button>
                        <button class="nav-btn exams-tab">الامتحانات 📃</button>
                        <button class="nav-btn marks-tab">نتايجي 📈</button>
                        <button class="nav-btn books-tab">الكتب 📚</button>
                        <button class="nav-btn audio-tab">صوتيات 🔊</button>
                        <button class="nav-btn profile-tab">بروفايلي 📍</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="courses" class="tab py-5">
            <div class="container">
                <h2 class="section-title">كورساتي</h2>
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
                                <a href="#" class="btn btn-main">تابع الدرس</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="exams" class="tab py-5">
            <div class="container">
                <h2 class="section-title">الامتحانات</h2>
                <div class="row">
                    <div class="col-lg-4 px-2">
                        <div class="course-card">
                            <div class="card-body">
                                <h5 class="card-title">امتحان 1</h5>
                                <p class="card-text">
                                    نظرية كيرشوف تحلل الدوائر الكهربائية. تتضمن قانونين للتيار
                                    والجهد. تسهل فهم الدوائر المعقدة.
                                </p>
                                <a href="#" class="btn btn-main">الذهاب للامتحان</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="marks" class="tab py-5">
            <div class="container">
                <h2 class="section-title">نتايجي</h2>
                <div class="row">
                    <div class="col-lg-4 px-2">
                        <div class="course-card">
                            <div class="card-body">
                                <h5 class="card-title">امتحان 1</h5>
                                <p class="card-text">40/50</p>
                                <a href="#" class="btn btn-main">عرض الامتحان</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="books" class="tab py-5">
            <div class="container">
                <h2 class="section-title">الكتب</h2>
                <div class="row">
                    <div class="col-lg-4 px-2">
                        <div class="course-card">
                            <div class="card-body">
                                <h5 class="card-title">نظرية كيرشوف</h5>
                                <p class="card-text">
                                    نظرية كيرشوف تحلل الدوائر الكهربائية. تتضمن قانونين للتيار
                                    والجهد. تسهل فهم الدوائر المعقدة.
                                </p>
                                <a href="#" class="btn btn-main">اقرأ الكتاب</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="audio" class="tab py-5">
            <div class="container">
                <h2 class="section-title">صوتيات</h2>
                <div class="row">
                    @forelse ($audios as $audio)
                        <div class="col-lg-4 px-2">
                            <div class="course-card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $audio->audio_name }}</h5>
                                    <p class="card-text">{{ $audio->description }}
                                    </p>
                                    <audio src="{{ $audio->url }}" controls></audio>
                                </div>

                            </div>
                        </div>
                    @empty
                        <div class="col-lg-12 mb-2">
                            <div class="fs-3 text-center"
                                style="background-color: rgba(55, 183, 195, 0.5); border-radius: 5px" role="alert">
                                لا يوجد ملفات صوتية بعد
                            </div>
                        </div>
                    @endforelse

                </div>
            </div>
        </section>
        <section id="profile" class="tab py-5">
            <div class="container">
                <h2 class="section-title">بروفايلي</h2>
                <form action="" method=""
                    class="edit-profile d-flex flex-wrap align-items-center justify-content-start">
                    <div class="image-input col-12 d-flex flex-column p-2">
                        <label for="uimage">صورة الحساب</label>
                        <input type="file" id="uimage" name="uimage" />
                    </div>
                    <div class="name-input col-md-6 col-12 d-flex flex-column p-2">
                        <label for="name">الاسم</label>
                        <input type="text" id="name" name="name" required />
                    </div>
                    <div class="email-input col-md-6 col-12 d-flex flex-column p-2">
                        <label for="email">البريد الالكتروني</label>
                        <input type="email" id="email" name="email" required />
                    </div>
                    <div class="phone-input col-md-6 col-12 d-flex flex-column p-2">
                        <label for="phone">رقم الهاتف</label>
                        <input type="tel" id="phone" name="phone" minlength="11" maxlength="11" required />
                    </div>
                    <div class="level-input col-md-6 col-12 d-flex flex-column p-2">
                        <label for="level">السنة الدراسية</label>
                        <input type="text" id="level" name="level" required />
                    </div>
                    <button class="edit-btn me-2 mt-4">تعديل الحساب</button>
                </form>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
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
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            console.log("loaded");

            const buttons = document.querySelectorAll(".nav-btn");
            const tabs = document.querySelectorAll(".tab");

            buttons.forEach((button) => {
                button.addEventListener("click", function() {
                    console.log("clicked");
                    buttons.forEach((btn) => btn.classList.remove("active"));
                    this.classList.add("active");
                    const targetSection = this.classList[1].replace("-tab", "");
                    tabs.forEach((tab) => tab.classList.remove("active"));
                    document.getElementById(targetSection).classList.add("active");
                });
            });
            document.getElementById("courses").classList.add("active");
        });
    </script>
@endpush
