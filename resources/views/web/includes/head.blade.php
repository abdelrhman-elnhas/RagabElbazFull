<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>استاذ رجب الباز</title>
    <meta name="theme-color" content="#071952" />
    <meta name="msapplication-navbutton-color" content="#071952" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#071952" />
    <meta name="author" content="Master Code" />
    <meta name="MobileOptimized" content="320" />
    <meta property="og:title" content="Ragab Elbaz" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://ragabelbaz.com" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="ragabelbaz" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Beiruti:wght@200..900&display=swap"
        rel="stylesheet"
    />
    <!-- css files -->
    <link rel="stylesheet" href="{{ env('APP_URL') .asset('web_files')}}/assets/bootstrab/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') .asset('web_files')}}/assets/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') .asset('web_files')}}/css/style.css" />
    <style>
        .alert{
        position: fixed;
        bottom: 0;
        left: 0;
        }
        .fa-solid{
            color: #ff8601
        }
    </style>
  @stack('style')
</head>

<body>
