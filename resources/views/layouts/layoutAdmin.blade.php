<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('assets/image/ico/logoIcon.ico') }}" rel="icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/adminlte/dist/css/AdminLTE.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    @yield('assets-top')
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar"><!-- SideNav -->
            <div class="sidebar-header">
                <h3 class="text-center" id="brandSide">
                    Smart Government
                    <span>
                        <a class="sidebar-toggle btn sidebarCollapse" style="color: #000000!important;">
                            <em class="fa fa-indent fa-lg" style="padding: 0!important;"></em>
                        </a>
                    </span>
                </h3>
                <strong id="spaceScn">
                    <a class="sidebar-toggle btn sidebarCollapse"><em class="fa fa-indent fa-lg fa-color2"></em></a>
                </strong>
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="{{ route('home') }}"><em class="glyphicon glyphicon-home"></em> Beranda</a>
                </li>
                <li class="liDive">
                <a href="{{ route('otda.index') }}">
                        <em class="fa fa-university"></em> Daftar OTDA
                    </a>
                </li>
                <li class="liDive">
                    <a href="#menuSatda" data-toggle="collapse" aria-expanded="false">
                        <em class="fa fa-building-o"></em> Daftar SATDA
                    </a>
                    <ul id="menuSatda" class="collapse list-unstyled">
                        <li><a href="{{ route('satdaListProv') }}">SATDA Provinsi</a></li>
                        <li><a href="{{ route('satdaListKab') }}">SATDA Kabupaten</a></li>
                    </ul>
                </li>
                <li class="liDive">
                    <a href="#menuSkpd" data-toggle="collapse" aria-expanded="false">
                        <em class="fa fa-building-o"></em> Daftar SKPD
                    </a>
                    <ul id="menuSkpd" class="collapse list-unstyled">
                        <li><a href="{{ route('skpdListProv') }}">SKPD Provinsi</a></li>
                        <li><a href="{{ route('skpdListKab') }}">SKPD Kabupaten</a></li>
                    </ul>
                </li>
                <li class="liDive">
                    <a href="{{ route('indikator.index') }}">
                        <em class="fa fa-tasks"></em> Daftar Indikator
                    </a>
                </li>
                <li class="liDive">
                    <a href="#menuPengguna" data-toggle="collapse" aria-expanded="false">
                        <em class="fa fa-users"></em> Pengaturan Pengguna
                    </a>
                    <ul id="menuPengguna" class="collapse list-unstyled">
                        <li><a href="{{ route('adminProvList') }}">Admin Provinsi</a></li>
                        <li><a href="{{ route('adminKabList') }}">Admin Kabupaten/Kota</a></li>
                        <li><a href="{{ route('userProvList') }}">Pengguna Provinsi</a></li>
                        <li><a href="{{ route('userKabList') }}">Pengguna Kabupaten/Kota</a></li>
                    </ul>
                </li>
                <li class="liDive">
                    <a href="#menuStatistik" data-toggle="collapse" aria-expanded="false">
                        <em class="fa fa-line-chart"></em> Statistik
                    </a>
                    <ul id="menuStatistik" class="collapse list-unstyled">
                        <li><a href="{{ route('statUser') }}">Statistik Pengguna</a></li>
                        <li><a href="{{ route('statPage') }}">Statistik Halaman</a></li>
                    </ul>
                </li>
                <li class="liDive">
                    <a href="{{ route('viewProfile') }}"><em class="fa fa-address-card-o"></em> Profil</a>
                </li>
                <li class="liDive liDiveLast">
                    <a href="{{ route('logout') }}" id="out"><em class="fa fa-sign-out"></em> Log Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </nav>
        <div id="content"><!-- Content -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation"><!-- TopNav -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <em class="fa fa-chevron-circle-down fa-lg"></em>
                    </button>
                    <a class="sidebar-toggle btn btn-sidebar navbar-brand sidebarCollapse naviHide">
                        <em class="fa fa-indent fa-color fa-1x"></em>
                    </a>
                    <a href="#" id="titleBrand" class="naviHide navbar-brand">Smart Goverment</a>
                </div>
                <div id="navbar-collapse" class="collapse navbar-collapse"><!-- Navbar colapse -->
                    <ul id="navTopRight" class="nav navbar-nav navbar-right">
                        <li>
                            <a class="text-right"><strong>{{ Auth::user()->name }}</strong><br/>
                                @if( Auth::user()->level_id == 2 || Auth::user()->level_id == 3)
                                    ADMINISTRATOR {{ $data->nama_provinsi }}
                                @elseif( Auth::user()->level_id == 4 || Auth::user()->level_id == 5)
                                    USER {{ $data->nama_kabupaten }}
                                @else
                                    SUPER ADMINISTRATOR
                                @endif
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="wrapp sideBorder"><!-- BodyContent -->
                <section class="content-header wrapp-head">
                    @yield('titleContent')
                </section>
                <section class="wrapp-content">
                    @yield('content')
                </section>
                <section class="content-footer wrapp-foot">
                    @yield('titleFoot')
                </section>
            </div><
        </div>
    </div><!-- /.wrapper -->
    
    <!--Call Asset js-->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    @include('sweet::alert')
    <script type="text/javascript">
        $(document).ready(function () {
            $("#out").click(function(e) {
                e.preventDefault()
                swal({
                    title : "",
                    text : "Apakah anda yakin ingin Log Out?",
                    type : "warning",
                    showCancelButton: true,
                    cancelButtonText: "Tidak",
                    confirmButtonText: "Ya",
                    confirmButtonColor: '#5c8790',
                    cancelButtonColor: '#d33',
                },
                function(isConfirm){
                    if (isConfirm) {
                        window.location="{{ route('logout') }}";
                    } else {
                        return false;
                    }
                })
            });
        });
    </script>
    @yield('assets-bottom')
</body>
</html>