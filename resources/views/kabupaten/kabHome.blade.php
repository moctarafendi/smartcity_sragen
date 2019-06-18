@extends('layouts.layoutAfterLogin')

@section('titleContent')
<h1 class="spaceTitle"><strong>Beranda Kabupaten Kota</strong></h1>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"><!--LeftSide-->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading panel-head">
                        <h4 class="panel-title">Status Perizinan Selesai Berdasarkan Filter Kecamatan, Tahun, Bulan</h4>
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
                            <div id="stat1"></div>
                        </div>
                    </div>
                    <div class="panel-footer text-center" style="background-color:#fff!important;">
                        <h6>Sumber: SIPIONER</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading panel-head">
                        <h4 class="panel-title">Jumlah dan Presentase Penduduk Miskin</h4>
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
                            <div id="stat2"></div>
                        </div>
                    </div>
                    <div class="panel-footer text-center" style="background-color:#fff!important;">
                        <h6>Sumber: BPS</h6>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading panel-head">
                        <h4 class="panel-title">Rasio Gender Berdasarkan Filter Kecamatan, Tahun, Bulan</h4>
                    </div>
                    <div class="panel-body rights">
                        <div class="dropdowns">
                                <button class="dropbtnsiku fa fa-download fa-sm"></button>
                                    <div class="dropdowns-content">
                                        <div onclick="exportToImage3()">Download Image</div>
                                        <div onclick="exportToPDF3()">Download PDF</div>
                                    </div>
                            </div>
                    </div>
                    <div class="paddingchart">
                        <div class="panel-body">
                            <div id="stat3"></div>
                        </div>
                    </div>
                    <div class="panel-footer text-center" style="background-color:#fff!important;">
                        <h6>Sumber: SIMDUK</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><!--RightSide-->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading panel-head">
                        <h4 class="panel-title">Perkiraan Cuaca</h4>
                    </div>
                    <div class="panel-body text-center">
                        <div id="openweathermap-widget-15"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>       
</div>
<?php 
    $url = 'https://smartanalytics.udata.id/trusted/';
    $view = '/views/';
    $view1 = "DB139-IKU/Ds-IKUPerijinan?:iid=1";
    $view2 = "DB139-JumlahKemiskinan/Ds-JumlahKemiskinanBPS?:iid=1";
    $view3 = "DB139-TrendGender/Ds-Gender?:iid=7";
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
    $curl_connection3 = curl_init();
    curl_setopt_array( $curl_connection3, $options );
    $ticket1 = curl_exec($curl_connection1);
    curl_close($curl_connection1);
    $ticket2 = curl_exec($curl_connection2);
    curl_close($curl_connection2);
    $ticket3 = curl_exec($curl_connection3);
    curl_close($curl_connection3);
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
    localStorage.clear();
</script>
<script type="text/javascript">
    $('.sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
</script>
<script type='text/javascript' src="https://smartanalytics.udata.id/javascripts/api/tableau-2.min.js"></script>
<script type="text/javascript">
    chart1();
    var viz,viz2,viz3;
    function chart1() {
        var containerDiv = document.getElementById("stat1"),
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
        var containerDiv2 = document.getElementById("stat2"),
            url = "<?php echo $url , $ticket2, $view, $view2;?>";
            options = {
                hideTabs: true,
                hideToolbar: true,
                width: "100%",
                height: "400px",
                onFirstInteractive : () => {
                    chart3();
                }
            };
        viz2 = new tableau.Viz(containerDiv2, url, options); 
    }
    function exportToPDF2() {
        viz2.showExportPDFDialog();
    }
    function exportToImage2(){
        viz2.showExportImageDialog();
    }
    function chart3() {
        var containerDiv3 = document.getElementById("stat3"),
            url = "<?php echo $url , $ticket3, $view, $view3;?>";
            options = {
                hideTabs: true,
                hideToolbar: true,
                width: "100%",
                height: "400px"
            };
        viz3 = new tableau.Viz(containerDiv3, url, options); 
    }
    function exportToPDF3() {
        viz3.showExportPDFDialog();
    }
    function exportToImage3(){
        viz3.showExportImageDialog();
    }
</script>   
<script>
    window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = []; 
    window.myWidgetParam.push({id: 15,cityid: '1626498',appid: 'c924210690ad75ff771d976e39d87455',units: 'metric',containerid: 'openweathermap-widget-15',  }); 
    (function() {
        var script = document.createElement('script');
        script.async = true;
        script.charset = "utf-8";
        script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(script, s);  })();
</script>
@endsection