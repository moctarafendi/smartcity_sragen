@extends('layouts.layoutAfterLogin')

@section('titleContent')
<h1 class="spaceTitle"><strong>IKU Angka Kemiskinan</strong></h1></br>
<div>
    <ol class="breadcrumb" style="margin-top: -2%;margin-bottom: 1%;background-color: #fff;padding-left: 0;padding-right: 0;">
        <li><a>Indikator Daerah</a></li>
        <li><a>Kemiskinan</a></li>
        <li><a>IKU Angka Kemiskinan</a></li>
    </ol>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title text-center">IKU - Angka Kemiskinan </br>Filter Kecamatan, Tahun, Bulan</h4>
            </div>
            <div class="panel-body rights">
                <div class="dropdowns">
                        <button class="dropbtnsiku fa fa-download fa-sm"></button>
                            <div class="dropdowns-content">
                                <div onclick="exportToImage1()">Download Image</div>
                                <div onclick="exportToPDF1()">Download PDF</div>
                            </div>
                    </div>
            </div>
            <div class="paddingchart">
                <div class="panel-body">
                    <div id="chart1"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title text-center">IKU - Angka Kemiskinan Berdasarkan Kecamatan  </br>Filter Kecamatan, Tahun, Bulan</h4>
            </div>
            <div class="panel-body rights">
                <div class="dropdowns">
                        <button class="dropbtnsiku fa fa-download fa-sm"></button>
                            <div class="dropdowns-content">
                                <div onclick="exportToImage2()">Download Image</div>
                                <div onclick="exportToPDF2()">Download PDF</div>
                            </div>
                    </div>
            </div>
            <div class="paddingchart">
                <div class="panel-body">
                    <div id="chart2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    $url = 'https://smartanalytics.udata.id/trusted/';
    $view = '/views/';
    $view1 = "DB139-IKU/Ds-IKUKemiskinan?:iid=1";
    $view2 = "DB139-JumlahKemiskinan/Ds-JumlahRasioKemiskinan?:iid=1";
    $username = $data1->username;
    $pass = $data1->password;
    $params = array(
        "username" => $username,
        "password" => $pass,
    );
    $options = array(
        CURLOPT_URL             => $url,
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_CONNECTTIMEOUT  => 30,
        CURLOPT_TIMEOUT         => 30,
        CURLOPT_IPRESOLVE       => CURL_IPRESOLVE_V4,
        CURLOPT_POSTFIELDS      => $params
    );
    $curl_connection1 = curl_init();
    curl_setopt_array( $curl_connection1, $options );
    $curl_connection2 = curl_init();
    curl_setopt_array( $curl_connection2, $options );
    $ticket1 = curl_exec($curl_connection1);
    curl_close($curl_connection1);
    $ticket2 = curl_exec($curl_connection2);
    curl_close($curl_connection2);
?>
@endsection

@section('titleFoot')
<div class="row" style="margin-top:1%; margin-bottom:1%;">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <h5>Powered by</h5>
        <h4><strong>Smart City Nusantara</strong></h4>
    </div>
</div>
@endsection

@section('assets-bottom')
<script type="text/javascript">
    localStorage.setItem("storage_menu", "simsaraswati");
    localStorage.setItem("page_menu", "kemiskinanAngka");
</script>
<script src="{{ asset('assets/js/scriptSideNav.js') }}"></script>
<script type='text/javascript' src="https://smartanalytics.udata.id/javascripts/api/tableau-2.min.js"></script>
<script type="text/javascript">
    chart1();
    var viz,viz2,viz3,viz4,viz5,viz6;
    function chart1() {
        var containerDiv = document.getElementById("chart1"),
            url = "<?php echo $url , $ticket1, $view, $view1;?>";
            options = {
                hideTabs: true,
                hideToolbar: true,
                width: "100%",
                height: "400px",
                onFirstInteractive : () => {
                    chart2();
                }
            };
        viz = new tableau.Viz(containerDiv, url, options); 
    }
    function exportToPDF1() {
        viz.showExportPDFDialog();
    }
    function exportToImage1(){
        viz.showExportImageDialog();
    }
    function chart2() {
        var containerDiv2 = document.getElementById("chart2"),
            url = "<?php echo $url , $ticket2, $view, $view2;?>";
            options = {
                hideTabs: true,
                hideToolbar: true,
                width: "100%",
                height: "400px",
            };
        viz2 = new tableau.Viz(containerDiv2, url, options); 
    }
    function exportToPDF2() {
        viz2.showExportPDFDialog();
    }
    function exportToImage2(){
        viz2.showExportImageDialog();
    }
</script>
@endsection