<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#EDC607" />
    <meta name="author" content="Ultra Progress" />
    <meta name="MobileOptimized" content="320" />
    <meta property="og:title" content="Seyanty" />
    <meta property="og:type" content="website" />
    <title>صيانتي</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="./{{ asset('web_files') }}/images/favicon.png" type="image/png">

    <!-- Bootstrap -->
    <link href="./{{ asset('admin_files') }}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./{{ asset('admin_files') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./{{ asset('admin_files') }}/build/css/custom.min.css" rel="stylesheet">
    <style>
        a:hover {
            text-decoration: none !important
        }
    </style>
</head>

<body class="login">
    <div>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form method="POST" action="{{ url('admin/login') }}">
                        @csrf
                        <img width="150" src="./{{ asset('web_files') }}/images/logo.png" alt="">
                        <div class="mt-4">
                            <input type="text" name="phone" class="form-control" placeholder="رقم الهاتف" required />
                        </div>
                        <div>
                            <input type="password" name="password" class="form-control" placeholder="كلمه المرور" required />
                        </div>
                        <div>
                            <a class="btn btn-warning submit" href="index.html">تسجيل الدخول</a>
                        </div>

                        <div class="mt-4" dir="ltr">
                            <p>©2024 All Rights Reserved. Ultar Progress Team</p>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
