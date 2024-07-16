<footer id="Footer">
    <div class="container mb-5">
        <div class="text-center text-lg-start text-white pt-5">
            <div class="text-center text-md-end mt-5">
                <div class="row mt-3">
                    <div class="links col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">الأقســام</h6>
                        <p>
                            <a class="text-white {{ Request::is('home') ? 'active' : '' }}" aria-current="page"
                                href="{{ url('home') }}">الرئيسية</a>
                        </p>
                        <p>
                            <a class="text-white {{ Request::is('beststudents') ? 'active' : '' }}" aria-current="page"
                                href="{{ url('beststudents') }}">الطلاب المتميزين</a>
                        </p>
                        <p>
                            <a class="text-white {{ Request::is('news') ? 'active' : '' }}" aria-current="page"
                                href="{{ url('news') }}">آخر الأخبار</a>
                        </p>
                        <p>
                            <a class="text-white {{ Request::is('home') ? 'active' : '' }}" aria-current="page"
                                href="{{ url('contactus') }}">تواصــل معـنــا</a>
                        </p>
                    </div>

                    <div class="links col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">أهم الصفحــات</h6>
                        <p>
                            <a class="text-white {{ Request::is('login') ? 'active' : '' }}" aria-current="page"
                                href="{{ url('login') }}">تسجيل الدخول</a>
                        </p>
                        <p>
                            <a class="text-white {{ Request::is('register') ? 'active' : '' }}" aria-current="page"
                                href="{{ url('register') }}">إنشاء حساب</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold">تواصـــل معــنــــا</h6>
                        <p>
                            <svg class="svg-inline--fa fa-location-crosshairs" aria-hidden="true" focusable="false"
                                data-prefix="fas" data-icon="location-crosshairs" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M256 0c17.7 0 32 14.3 32 32V66.7C368.4 80.1 431.9 143.6 445.3 224H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H445.3C431.9 368.4 368.4 431.9 288 445.3V480c0 17.7-14.3 32-32 32s-32-14.3-32-32V445.3C143.6 431.9 80.1 368.4 66.7 288H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H66.7C80.1 143.6 143.6 80.1 224 66.7V32c0-17.7 14.3-32 32-32zM128 256a128 128 0 1 0 256 0 128 128 0 1 0 -256 0zm128-80a80 80 0 1 1 0 160 80 80 0 1 1 0-160z">
                                </path>
                            </svg>
                            كفر الشيخ ، مصر
                        </p>
                        {{-- <p>
                            <a href="mailto:info@ragabelbaz.net" class="footer-links"><svg
                                    class="svg-inline--fa fa-envelope" aria-hidden="true" focusable="false"
                                    data-prefix="far" data-icon="envelope" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z">
                                    </path>
                                </svg>
                                info@ragabelbaz.net</a>
                        </p> --}}
                        {{-- <p>
                            <a href="https://www.instagram.com/ragabelbaz" class="footer-links"><svg
                                    class="svg-inline--fa fa-instagram" aria-hidden="true" focusable="false"
                                    data-prefix="fab" data-icon="instagram" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                                    </path>
                                </svg>
                                ragabelbaz</a>
                        </p> --}}
                        <p dir="ltr">
                            <a class="footer-links" href="https://wa.me/966590258860">+201022370583
                                <svg class="svg-inline--fa fa-mobile-screen-button ms-1" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="mobile-screen-button" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M16 64C16 28.7 44.7 0 80 0H304c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H80c-35.3 0-64-28.7-64-64V64zM224 448a32 32 0 1 0 -64 0 32 32 0 1 0 64 0zM304 64H80V384H304V64z">
                                    </path>
                                </svg></a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 pt-4">
                        <img src="{{ env('APP_URL') . asset('web_files') }}/images/logor.png"
                            class="img-fluid logo-white" alt="Dr. Ragab Elbaz Logo" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footerBottom text-center p-3" dir="ltr">
        © 2024 Copyright
        <a href="https://www.facebook.com/masterc0de"> Master Code </a>. All
        Rights Reserved.
    </div>
</footer>
