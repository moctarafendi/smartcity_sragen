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
    <link href="{{ asset('assets/css/portal.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome/css/font-awesome.min.css') }}" rel="stylesheet">
</head>

<body>
<div class="wrapper">
    <div id="content">
        <nav class="navbar navbar-default navbar-static-top" role="navigation"><!-- Navbar -->
            <div class="container-fluid">
                <div class="navbar-header"><!-- Brand and toggle get grouped for better mobile display -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <em class="fa fa-chevron-circle-down fa-lg"></em>
                    </button>
                    <a class="sidebar-toggle btn btn-sidebar navbar-brand sidebarCollapse naviHide">
                        <img src="{{ asset('assets/image/logo_kab/sragenIcon2.png') }}" alt="Logo Kota" class="img-responsive img-top" />
                    </a>
                    <a class="navbar-brand" id="brandHide">
                        <img src="{{ asset('assets/image/logo_kab/sragenIcon2.png') }}" alt="Logo Kota" class="img-responsive" />
                    </a>
                    <a href="#" id="titleBrand" class="navbar-brand naviHide">
                        Smart Goverment
                    </a>
                </div>
                <div id="navbar-collapse" class="collapse navbar-collapse"><!-- Navbar colapse -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{route('login')}}" class="text-right"><strong>Log In</strong></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left" id="brandHide">
                        <li>
                            <a class="text-left brandName"><strong>SMART</strong></br>GOVERNMENT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="wrapp sideBorder"><!-- Content -->
            <section class="wrapp-content">
                @yield('content')
            </section>
            <section class="content-footer wrapp-foot">
                @yield('titleFoot')
            </section>
        </div>
    </div>
</div><!-- /.wrapper -->

<script type="text/javascript">
    localStorage.clear();
</script>
<script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129719173-1"></script>
<script src="{{ asset('assets/js/analyticGoogle.js') }}"></script>
<script type='text/javascript' src="https://smartanalytics.udata.id/javascripts/api/tableau-2.min.js"></script>
@yield('assets-bottom')
</body>
</html>