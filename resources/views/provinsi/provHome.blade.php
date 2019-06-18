@extends('layouts.layoutAfterLogin')

@section('titleContent')
    <h1 class="spaceTitle"><strong>Beranda Provinsi</strong></h1>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2>Under Development ...</h2>
        </div>
    </div>
@endsection


@section('titleFoot')
    <div class="row" style="margin-top:35%;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h5>Powered by</h5>
            <h4><strong>Smart City Nusantara</strong></h4>
        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- Highchart js -->
    <script src="{{ asset('assets/vendor/highcharts/highcharts_v610.js') }}"></script>
    <script src="{{ asset('assets/vendor/highcharts/highcharts-3d.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/highcharts/exporting.js') }}"></script> --}}
    <script src="{{ asset('assets/vendor/highcharts/highcharts-more.js') }}"></script>
    <script src="{{ asset('assets/vendor/highcharts/solid-gauge.js') }}"></script>
    <!-- chart Pencapaian SKPD -->
@endsection