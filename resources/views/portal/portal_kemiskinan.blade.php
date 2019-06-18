@extends('layouts.layoutPortal')

<?php
    $url2 = 'http://10.60.175.83/smartcity_api_dev/sragen/simsaraswati.php';
    $options2 = array(
            CURLOPT_URL             => $url2,
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_CONNECTTIMEOUT  => 30,
            CURLOPT_TIMEOUT         => 30,
            CURLOPT_IPRESOLVE       => CURL_IPRESOLVE_V4
        );
    $ch = curl_init();
    curl_setopt_array($ch, $options2);
    $result=curl_exec($ch);
    $response = json_decode($result);
    curl_close($ch);
?>

@section('content')
<div class="intro-header" id="header-kemiskinan">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="intro-message">
                    <h1>Data Kemiskinan Kabupaten Sragen</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container navPortal">
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center menu-box-space">
            <a href="{{route('portal_izin')}}" class="menuPortalHover">
                <i class="fa fa-files-o fa-2x" aria-hidden="true"></i>
                </br><h4 class="menu-space">Perizinan</h4>
            </a>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center menu-box-space lineLeftRight">
            <a href="{{route('portal_kependudukan')}}" class="menuPortalHover">
                <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                </br><h4 class="menu-space">Kependudukan</h4>
            </a>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 menu-box-space text-center">
            <a href="{{route('portal_kemiskinan')}}" class="menuPortalHover">
                <i class="fa fa-balance-scale fa-2x" aria-hidden="true"></i>
                </br><h4 class="menu-space">Kemiskinan</h4>
            </a>
        </div>
    </div>
</div>

<div class="container" style="margin-bottom:3%;">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading panel-head panel-head-blue">
                    <h4 class="panel-title text-center"><strong>Jumlah Penduduk Miskin Tahun 2017</strong></h4>
                </div>
                <div class="panel-body panel-body-blue text-center">
                    <h1 class="panel-data" >{{ number_format($response->jml_penduduk_miskin,0,",",".") }}</h1>
                </div>
                <div class="panel-footer panel-body-blue text-center">
                    <h6 class="panel-data">Sumber: BPS</h6>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading panel-head panel-head-green">
                    <h4 class="panel-title text-center"><strong>Persentase Penduduk Miskin Tahun 2017</strong></h4>
                </div>
                <div class="panel-body panel-body-green text-center">
                    <h1 class="panel-data">{{ number_format($response->angka_miskin_bps,2,",",".").'%' }}</h1>
                </div>
                <div class="panel-footer text-center panel-body-green">
                    <h6 class="panel-data">Sumber: BPS</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body rights">
                    <div class="dropdowns">
                        <button class="dropbtns fa fa-download fa-lg"></button>
                            <div class="dropdowns-content">
                                <div onclick="exportToImage()">Download Image</div>
                                <div onclick="exportToPDF()">Download PDF</div>
                            </div>
                    </div>
                </div>
                <div class="paddingchart">
                    <div class="panel-body">
                        <div id="stat1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 source">
            <em><h6>Sumber Data Grafik & HighLight: SIMSARASWATI, BPS dan SIMDUK</h6></em>
        </div>
    </div>
</div>

<?php 
    $url = 'https://smartanalytics.udata.id/trusted/';
    $view = '/views/';
    $view1 = "DB139-JumlahKemiskinan/Ds-PortalKemiskinan?:iid=3";
    $username = $data->username;
    $pass = $data->password;
    $params = array(
        "username" => $username,
        "password" => $pass,
    );
    $options = array(
        CURLOPT_URL             => $url,
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_CONNECTTIMEOUT  => 50,
        CURLOPT_TIMEOUT         => 50,
        CURLOPT_IPRESOLVE       => CURL_IPRESOLVE_V4,
        CURLOPT_POSTFIELDS      => $params
    );
    $curl_connection1 = curl_init();
    curl_setopt_array( $curl_connection1, $options );
    $ticket1 = curl_exec($curl_connection1);
    curl_close($curl_connection1);
?>
@endsection

@section('titleFoot')
<div class="container-fluid">
    <div class="row foot-space">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h5>Powered by</h5>
            <h4><strong>Smart City Nusantara</strong></h4>
        </div>
    </div>
</div>
@endsection

@section('assets-bottom')
<script type="text/javascript">
    chart1();
    var viz1;
    function chart1() {
        var containerDiv1 = document.getElementById("stat1"),
            url = "<?php echo $url , $ticket1, $view, $view1;?>";
            options = {
                hideTabs: true,
                hideToolbar: true,
                width: "100%",
                height: "1600px",
            };
        viz1 = new tableau.Viz(containerDiv1, url, options); 
    }
    function exportToPDF() {
        viz1.showExportPDFDialog();
    }
    function exportToImage(){
        viz1.showExportImageDialog();
    }
</script>
@endsection