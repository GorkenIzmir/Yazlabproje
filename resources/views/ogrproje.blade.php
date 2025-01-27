<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PTS</title>
        <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 10]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
        <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
        <meta name="author" content="CodedThemes"/>

     <!-- Favicon icon -->
     <link rel="icon" href="{{url('images/logoo.png')}}" type="image/x-icon">
     <!-- fontawesome icon -->
     <link rel="stylesheet" href="{{url('fonts/fontawesome/css/fontawesome-all.min.css')}}">
     <!-- animation css -->
     <link rel="stylesheet" href="{{url('css/animate.min.css')}}">
     <!-- vendor css -->
     <link rel="stylesheet" href="{{url('css/style.css')}}">

    </head>

<body>
   <!-- [ Pre-loader ] start
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
   [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->

    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
               <a href="ograna" class="b-brand">
                <div class="b-bg">
                <i ><img src="{{url('images/logoo.png')}}" width="50px" height="50px"></i>
                </div>
                   <span class="b-title">Öğrenci</span>
               </a>
               <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
           </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Öğrenci Profili</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="ogrprofil" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Öğrenci Bilgileri</span></a>
                        <li class="nav-item pcoded-menu-caption">
                            <label>Danışmana Sor</label>
                        </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="ogrproje" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Proje Öner</span></a>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="ogrrapor" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Rapor Öner</span></a>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="ogrtez" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Tez Öner</span></a>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Başvurularım</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
                        <a href="ogrbasvurular" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-plus"></i></span><span class="pcoded-mtext">Öğrenci Başvurular</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
     <!-- [ Header ] start -->
     <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="danbasvurular" class="b-brand">
                <div class="b-bg">
                    <i class="feather icon-trending-up"></i>
                </div>
                   <span class="b-title">Datta Able</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">

            <ul class="navbar-nav ml-auto">
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="images/user/avatar-2.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>{{ session()->get('ogr')->ad.' '.session()->get('ogr')->soyad }}</span>
                                <a href="ogrcikis" class="dud-logout" title="Çıkış">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="ogrprofil" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>

                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
 <!-- [ Main Content ] start -->
 !<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Hoşgeldiniz</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="ograna"><i class="feather icon-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Proje Öner</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <form id="addCustomer"  class="form-group" method="POST" >
                                @csrf <!-- {{ csrf_field() }} -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5>Proje Başlığı</h5>
                                        <hr>
                                        <input class="mb-3 form-control form-control-lg" type="text" name="baslik" placeholder="Proje Başlığı">
                                        <hr>
                                        <h5>Proje Amacı, Önem Ve Kapsamı</h5>
                                        <hr>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Minimum 200 Karakter Olmalıdır</label>
                                            <textarea class="form-control" name="amac" id="exampleFormControlTextarea1" column="200" rows="6" ></textarea>
                                        </div>
                                        <hr>
                                        <h5>Yöntem Ve Araştırma Kaynakları</h5>
                                        <hr>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Minimum 300 Karakter Olmalıdır</label>
                                            <textarea class="form-control" name="materyal" id="exampleFormControlTextarea1" column="200" rows="6" ></textarea>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="col-md-6">

                                        <h5>Projeyi Anlatan 5 Anahtar Kelime</h5>
                                        <hr>
                                        <input class="mb-3 form-control form-control-lg" name="anahtar1" type="text" placeholder="Anahtar Kelime-1">
                                        <input class="mb-3 form-control form-control-lg" name="anahtar2" type="text" placeholder="Anahtar Kelime-2">
                                        <input class="mb-3 form-control form-control-lg" name="anahtar3" type="text" placeholder="Anahtar Kelime-3">
                                        <input class="mb-3 form-control form-control-lg" name="anahtar4" type="text" placeholder="Anahtar Kelime-4">
                                        <input class="mb-3 form-control form-control-lg" name="anahtar5" type="text" placeholder="Anahtar Kelime-5">
                                        <hr>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>........%Benzerlik Oranı</h5>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="card">
                                                        <button type="submit" class="btn btn-outline-primary" title="Projeyi Öner" data-toggle="tooltip">Projeyi Öner</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </div>
    </div>
</div>
<script src="{{url('js/pcoded.min.js')}}"></script>
<script src="{{url('js/vendor-all.min.js')}}"></script>
<script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script>


</body>
</html>
