<!DOCTYPE html>
<html lang="en">

<head>
    <title>BANK KALSEL</title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    	<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
    <link rel="icon" href="/material/dist/assets/images/favicon.ico" type="image/x-icon">

    <!-- vendor css -->
    <link rel="stylesheet" href="/material/dist/assets/css/style.css">

    <link rel="stylesheet" href="/notif/dist/css/iziToast.min.css">
    <script src="/notif/dist/js/iziToast.min.js" type="text/javascript"></script>


</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menu-light ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div ">

                <div class="">
                    <div class="main-menu-header">
                        <img class="img-radius" src="/material/dist/assets/images/user/user.png"
                            alt="User-Profile-Image">
                        <div class="user-details">
                            <div id="more-details">{{Auth::user()->name}} <i class="fa fa-caret-down"></i></div>
                        </div>
                    </div>
                    <div class="collapse" id="nav-user-link">
                        {{-- <ul class="list-unstyled">
                            <li class="list-group-item"><a href="user-profile.html"><i
                                        class="feather icon-user m-r-5"></i>View Profile</a></li>
                            <li class="list-group-item"><a href="#!"><i
                                        class="feather icon-settings m-r-5"></i>Settings</a></li>
                            <li class="list-group-item"><a href="auth-normal-sign-in.html"><i
                                        class="feather icon-log-out m-r-5"></i>Logout</a></li>
                        </ul> --}}
                    </div>
                </div>

                <ul class="nav pcoded-inner-navbar ">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Menu Utama</label>
                    </li>
                    <li class="nav-item">
                        <a href="/superadmin" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="/superadmin/pegawai" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-list"></i></span><span class="pcoded-mtext">Data Pegawai
                            </span></a>
                    </li>
                    <li class="nav-item">
                        <a href="/superadmin/penempatan" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-list"></i></span><span class="pcoded-mtext">Data Penempatan
                            </span></a>
                    </li>
                    <li class="nav-item">
                        <a href="/superadmin/surat" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-list"></i></span><span class="pcoded-mtext">Pembuatan Surat
                            </span></a>
                    </li>


                    <li class="nav-item">
                        <a href="/superadmin/lihat" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-list"></i></span><span class="pcoded-mtext">Lihat & Cetak
                            </span></a>
                    </li>

                    <li class="nav-item">
                        <a href="/superadmin/rekapitulasi" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-list"></i></span><span class="pcoded-mtext">Rekapitulasi
                            </span></a>
                    </li>
                    <li class="nav-item">
                        <a href="/superadmin/laporan" class="nav-link "><span class="pcoded-micon"><i
                                    class="feather icon-list"></i></span><span class="pcoded-mtext">Laporan
                            </span></a>
                    </li>
                    <li class="nav-item">
                        <a href="/logout" class="nav-link" onclick="return confirm('Yakin ingin keluar?');"><span
                                class="pcoded-micon"><i class="feather icon-log-out"></i></span><span
                                class="pcoded-mtext">
                                Logout</span></a>
                    </li>
                </ul>

                {{-- <div class="card text-center">
                    <div class="card-block">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="feather icon-sunset f-40"></i>
                        <h6 class="mt-3">Download Pro</h6>
                        <p>Getting more features with pro version</p>
                        <a href="https://1.envato.market/qG0m5" target="_blank"
                            class="btn btn-primary btn-sm text-white m-0">Upgrade Now</a>
                    </div>
                </div> --}}

            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->
    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <strong>BANK KALSEL</strong>
                {{-- <img src="/material/dist/assets/images/logo.png" alt="" class="logo"> --}}
                <img src="/material/dist/assets/images/logo-icon.png" alt="" class="logo-thumb">
            </a>
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
                    <div class="search-bar">
                        <input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">


            </ul>
        </div>


    </header>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <table width="100%">
                                    <tr>
                                        <td>
                                            <h3 class="m-b-10" style="color: white">
                                                {{strtoupper('sistem informasi manajemenperjanjian kerja waktu tertentu
                                                pada Bank Kalsel Cabang Paringin')}}
                                            </h3>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                            <ul class="breadcrumb">
                                {{-- <li class="breadcrumb-item"><a href="index.html"><i
                                            class="feather icon-home"></i></a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            @yield('content')
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

    <!-- Required Js -->
    <script src="/material/dist/assets/js/vendor-all.min.js"></script>
    <script src="/material/dist/assets/js/plugins/bootstrap.min.js"></script>
    <script src="/material/dist/assets/js/ripple.js"></script>
    <script src="/material/dist/assets/js/pcoded.min.js"></script>

    <!-- Apex Chart -->
    <script src="/material/dist/assets/js/plugins/apexcharts.min.js"></script>


    <script type="text/javascript">
        @include('layouts.notif')
    </script>
    <!-- custom-chart js -->
    <script src="/material/dist/assets/js/pages/dashboard-main.js"></script>
</body>

</html>