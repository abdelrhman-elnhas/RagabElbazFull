<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title justify-content-center mt-4" style="border: 0;">
                        <img width="70%" src="./{{asset('web_files')}}/images/logoWhite.png" alt="">
                    </div>
                    <div class="clearfix"></div>
                    <br />
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li>
                                    <a href="{{ url('categories') }}"><i class="fa fa-bars"></i> الاقسام </a>
                                </li>
                                <li><a><i class="fa fa-users"></i> المستخدمين <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('users') }}">المستخدمين</a></li>
                                        <li><a href="{{ url('workers') }}">الموظفين</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-cubes"></i> الطلبات <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="{{ url('requests') }}">كل الطلبات</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ url('logout') }}"><i class="fa fa-sign-out"></i> تسجيل الخروج </a>
                                </li>
                            </ul>
                        </div>


                    </div>
                    <!-- /sidebar menu -->
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">


                            <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                                    aria-labelledby="navbarDropdown1">


                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="./{{ asset('admin_files') }}/images/img.jpg"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
