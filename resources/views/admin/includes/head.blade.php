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
    <link rel="shortcut icon" href="{{ env('APP_URL') }}/{{ asset('web_files') }}/images/favicon.png" type="image/png">
    <!-- Bootstrap -->
    <link href="{{ env('APP_URL') }}/{{ asset('admin_files') }}/vendors/bootstrap/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ env('APP_URL') }}/{{ asset('admin_files') }}/vendors/font-awesome/css/font-awesome.min.css"
        rel="stylesheet">
    <!-- Datatables -->
    <link
        href="{{ env('APP_URL') }}/{{ asset('admin_files') }}/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css"
        rel="stylesheet">
    <link
        href="{{ env('APP_URL') }}/{{ asset('admin_files') }}/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"
        rel="stylesheet">
    <link
        href="{{ env('APP_URL') }}/{{ asset('admin_files') }}/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"
        rel="stylesheet">
    <link
        href="{{ env('APP_URL') }}/{{ asset('admin_files') }}/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"
        rel="stylesheet">
    <link
        href="{{ env('APP_URL') }}/{{ asset('admin_files') }}/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"
        rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ env('APP_URL') }}/{{ asset('admin_files') }}/build/css/custom.min.css" rel="stylesheet">
    @stack('styles')
    <style>
        .btn-group,
        .btn-group-vertical {
            width: 100%;
        }

        #datatable-buttons_length {
            display: inline-block;
            width: 50%;
            text-align: right;
            margin-top: 19px;
        }

        #datatable-buttons_filter {
            width: 50%;
            display: inline-block;
            text-align: left;
        }

        .dataTables_info {
            width: 50%;
            float: left;
        }
        div.dataTables_wrapper div.dataTables_paginate{
            margin-top: 9px;
        }
        table{margin-bottom: 3px !important;    text-align: right;}
        .x_title h2 {
            float: none;
            width: 100%;
            text-align: center;
        }
        table.dataTable thead .sorting:after, table.dataTable thead .sorting_asc:after, table.dataTable thead .sorting_desc:after, table.dataTable thead .sorting_asc_disabled:after, table.dataTable thead .sorting_desc_disabled:after{
            left: 8px;
            right: auto;
        }

    </style>
</head>
