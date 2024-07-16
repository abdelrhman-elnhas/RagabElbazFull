<header class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('') }}">الرئيسة</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contactus') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('contactus') }}">الكورسات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contactus') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('contactus') }}">الطلاب المتميزين</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contactus') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('contactus') }}">اخر الاخبار </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contactus') ? 'active' : '' }}" aria-current="page"
                            href="{{ url('contactus') }}">تواصل معنا </a>
                    </li>
                    @if (Auth::user()->only == 1)
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('admin') ? 'active' : '' }}" href="{{ aurl('') }}">
                                لوحة التحكم</a>
                        </li>
                    @endif
                    @if (Auth::user())
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('logout') ? 'active' : '' }}" aria-current="page"
                                href="{{ url('logout') }}">تسجيل خروج </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('login') ? 'active' : '' }}" aria-current="page"
                                href="{{ url('login') }}">تسجيل الدخول </a>
                        </li>
                    @endif
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ url('') }}"><img
                    src="{{ env('APP_URL') . asset('web_files') }}/images/logor.png" width="80"
                    alt="" /></a>
        </div>
    </nav>
</header>
