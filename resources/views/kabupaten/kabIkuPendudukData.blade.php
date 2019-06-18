@extends('layouts.layoutAfterLogin')

@section('titleContent')
<h1 class="spaceTitle"><strong>Data Pertumbuhan Penduduk</strong></h1></br>
<div>
    <ol class="breadcrumb" style="margin-top: -2%;margin-bottom: 1%;background-color: #fff;padding-left: 0;padding-right: 0;">
        <li><a>Indikator Daerah</a></li>
        <li><a>Kependudukan</a></li>
        <li><a>Data Pertumbuhan Penduduk</a></li>
    </ol>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title">
                    Jumlah Penduduk Berdasarkan Kecamatan dan Filter Tahun, Bulan
                </h4>
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
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title">
                    Jumlah Penduduk Berdasarkan Kecamatan dan Filter Tahun, Bulan, Gender
                </h4>
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
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title">
                    Jumlah Penduduk Berdasarkan Tahun dan Filter Kecamatan, Tahun dan Bulan
                </h4>
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
                    <div id="chart3"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading panel-head">
                    <h4 class="panel-title">
                        Jumlah Penduduk Berdasarkan Bulan dan Filter Kecamatan dan Tahun
                    </h4>
                </div>
                <div class="panel-body rights">
                    <div class="dropdowns">
                            <button class="dropbtnsiku fa fa-download fa-sm"></button>
                                <div class="dropdowns-content">
                                    <div onclick="exportToImage4()">Download Image</div>
                                    <div onclick="exportToPDF4()">Download PDF</div>
                                </div>
                        </div>
                </div>
                <div class="paddingchart">
                    <div class="panel-body">
                        <div id="chart4"></div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php 
    $url = 'https://smartanalytics.udata.id/trusted/';
    $view = '/views/';
    $view1 = "DB139-JumlahPenduduk/Ds-JumlahPenduduk2?:iid=3";
    $view2 = "DB139-JumlahPenduduk/Ds-JumlahPenduduk4_1?:iid=4";
    $view3 = "DB139-TahunXAxis/Ds-JumlahPendudukX?:iid=2";
    $view4 = "DB139-TahunXAxis/Ds-JumlahPendudukXBulan?:iid=12";
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
    $curl_connection4 = curl_init();
    curl_setopt_array( $curl_connection4, $options );
    $ticket1 = curl_exec($curl_connection1);
    curl_close($curl_connection1);
    $ticket2 = curl_exec($curl_connection2);
    curl_close($curl_connection2);
    $ticket3 = curl_exec($curl_connection3);
    curl_close($curl_connection3);
    $ticket4 = curl_exec($curl_connection4);
    curl_close($curl_connection4);
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
    localStorage.setItem("storage_menu", "simduk");
    localStorage.setItem("page_menu", "pendudukData");
</script>
<script src="{{ asset('assets/js/scriptSideNav.js') }}"></script>
<script type='text/javascript' src="https://smartanalytics.udata.id/javascripts/api/tableau-2.min.js"></script>
<script type="text/javascript">
    chart1();
    var viz,viz2,viz3,viz4;
    function chart1() {
        var containerDiv = document.getElementById("chart1"),
            url = "<?php echo $url , $ticket1, $view, $view1;?>";
            options = {
                hideTabs: true,
                hideToolbar: true,
                width: "100%",
                height: "480px",
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
                height: "480px",
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
        var containerDiv3 = document.getElementById("chart3"),
            url = "<?php echo $url , $ticket3, $view, $view3;?>";
            options = {
                hideTabs: true,
                hideToolbar: true,
                width: "100%",
                height: "480px",
                onFirstInteractive : () => {
                    chart4();
                }
            };
        viz3 = new tableau.Viz(containerDiv3, url, options); 
    }
    function exportToPDF3() {
        viz3.showExportPDFDialog();
    }
    function exportToImage3(){
        viz3.showExportImageDialog();
    }
    function chart4() {
        var containerDiv4 = document.getElementById("chart4"),
            url = "<?php echo $url , $ticket4, $view, $view4;?>";
            options = {
                hideTabs: true,
                hideToolbar: true,
                width: "100%",
                height: "480px",
            };
        viz4 = new tableau.Viz(containerDiv4, url, options); 
    }
    function exportToPDF4() {
        viz4.showExportPDFDialog();
    }
    function exportToImage4(){
        viz4.showExportImageDialog();
    }
</script>
@endsection