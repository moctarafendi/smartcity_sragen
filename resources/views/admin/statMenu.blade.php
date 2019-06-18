@extends('layouts.layoutAdmin')

@section('assets-top')
<link href="{{ asset('assets/dataTables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('titleContent')
<h1 class="spaceTitle"><strong>Dashboard Monitoring</strong></h1>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title">User LoggedIn</h4>
            </div>
            <div class="panel-body text-center containersh1">
                <h1 id="auto" class="textuserlogin">{{ $real_user }}</h1>
                <h6>Today {{ $dateToday }}</h6>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title">Daily History User LoggedIn</h4>
            </div>
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
                    <div class="row"></div></br>
                    <div id="stat3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title">Quartal Histroy User LoggedIn</h4>
            </div>
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
                    <div class="row"></div></br>
                    <div id="stat8"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title">Monthly History User LoggedIn</h4>
            </div>
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
                    <div class="row"></div></br>
                    <div id="stat4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title">Daily History User LoggedIn</h4>
            </div>
            <div class="panel-body">
                <div class="row text-center">
                    <div class="table-responsive" style="padding:2%;">
                        <table class="table" id="dataTableLogin" style="margin-top:2%!important;margin-bottom:2%!important;width:100%;">
                            <thead style="background:#5C8790;color:#fff;">
                                <tr>
                                    <th class="text-center">Id Login</th>
                                    <th class="text-center">Date Login</th>
                                    <th class="text-center">Date Logout</th>
                                    <th class="text-center">Nama User</th>
                                    <th class="text-center">Nama SATDA</th>
                                    <th class="text-center">Nama SKPD</th>
                                    <th class="text-center">Nama Level</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <ul class="nav nav-pills nav-justified stylesbackground">
                <li class="active"><a href="#statistikPerizinan" data-toggle="tab" class="nav-link active textNavMenu">Perizinan</a></li>
                <li><a href="#statistikKependudukan" data-toggle="tab" class="textNavMenu">Kependudukan</a></li>
                <li><a href="#statistikKemiskinan" data-toggle="tab" class="textNavMenu">Kemiskinan</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="statistikPerizinan">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading panel-head headstyles">
                                    <h4 class="panel-title textstyles">History Access Page Perizinan</h4>
                                </div>
                                <div class="panel-body">
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
                                        <div class="row"></div></br>
                                        <div id="stat5"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading panel-head headstyles">
                                    <h4 class="panel-title textstyles">Tabel Data History Access Page Perizinan</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row text-center">
                                        <div class="table-responsive" style="padding:2%;">
                                            <table class="table" id="dataTableHistoryPerizinan" style="margin-top:2%!important;margin-bottom:2%!important;">
                                                <thead style="background:#5C8790;color:#fff;">
                                                    <tr>
                                                        <th class="text-center">Id Access</th>
                                                        <th class="text-center">Date Access</th>
                                                        <th class="text-center">Nama User</th>
                                                        <th class="text-center">Nama Page</th>
                                                        <th class="text-center">Kategori Page</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="statistikKependudukan">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading panel-head headstyles">
                                    <h4 class="panel-title textstyles">History Access Page Kependudukan</h4>
                                </div>
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
                                        <div class="row"></div></br>
                                        <div id="stat6"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading panel-head headstyles">
                                    <h4 class="panel-title textstyles">Table Data History Access Page Kependudukan</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row text-center">
                                        <div class="table-responsive" style="padding:2%;">
                                            <table class="table" id="dataTableHistoryKependudukan" style="margin-top:2%!important;margin-bottom:2%!important;width:100%;">
                                                <thead style="background:#5C8790;color:#fff;">
                                                    <tr>
                                                        <th class="text-center">Id Access</th>
                                                        <th class="text-center">Date Access</th>
                                                        <th class="text-center">Nama User</th>
                                                        <th class="text-center">Nama Page</th>
                                                        <th class="text-center">Kategori Page</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" role="tabpanel" id="statistikKemiskinan">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading panel-head headstyles">
                                    <h4 class="panel-title textstyles">History Access Page Kemiskinan</h4>
                                </div>
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
                                            <div class="row">
                                            </div></br>
                                        <div id="stat7"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading panel-head headstyles">
                                    <h4 class="panel-title textstyles">Table Data History Access Page Kemiskinan</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="row text-center">
                                        <div class="table-responsive" style="padding:2%;">
                                            <table class="table" id="dataTableHistoryKemiskinan" style="margin-top:2%!important;margin-bottom:2%!important;width:100%;">
                                                <thead style="background:#5C8790;color:#fff;">
                                                    <tr>
                                                        <th class="text-center">Id Access</th>
                                                        <th class="text-center">Date Access</th>
                                                        <th class="text-center">Nama User</th>
                                                        <th class="text-center">Nama Page</th>
                                                        <th class="text-center">Kategori Page</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</div>
@endsection

@section('titleFoot')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <h5>Powered by</h5>
        <h4><strong>Smart City Nusantara</strong></h4>
    </div>
</div>
<?php 
    $url = 'https://smartanalytics.udata.id/trusted/';
    $view = '/views/';
    $view3 ="Statistik/StatistikLoginHarian?:iid=1";
    $view4 ="Statistik/StatistikLoginBulanan?:iid=1";
    $view5 ="Statistik/StatistikPagePerizinan?:iid=1";
    $view6 ="Statistik/StatistikPageKependudukan?:iid=3";
    $view7 ="Statistik/StatistikPageKemiskinan?:iid=5";
    $view8 ="Statistik/StatistikLoginQuarter?:iid=2";
    $username = $data1->username;
    $pass = $data1->password;
    $params = array(
        "username" => $username,
        "password" => $pass,
    );
    $options = array(
        CURLOPT_URL             => $url,
        CURLOPT_RETURNTRANSFER  => true,    // return web page as var
        CURLOPT_CONNECTTIMEOUT  => 30,      // timeout on connect
        CURLOPT_TIMEOUT         => 30,      // timeout on response
        CURLOPT_IPRESOLVE       => CURL_IPRESOLVE_V4,
        CURLOPT_POSTFIELDS      => $params
    );
    $curl_connection3 = curl_init();
    curl_setopt_array( $curl_connection3, $options );
    $ticket3 = curl_exec($curl_connection3);
    curl_close($curl_connection3);
    $curl_connection4 = curl_init();
    curl_setopt_array( $curl_connection4, $options );
    $ticket4 = curl_exec($curl_connection4);
    curl_close($curl_connection4);
    $curl_connection5 = curl_init();
    curl_setopt_array( $curl_connection5, $options );
    $ticket5 = curl_exec($curl_connection5);
    curl_close($curl_connection5);
    $curl_connection6 = curl_init();
    curl_setopt_array( $curl_connection6, $options );
    $ticket6 = curl_exec($curl_connection6);
    curl_close($curl_connection6);
    $curl_connection7 = curl_init();
    curl_setopt_array( $curl_connection7, $options );
    $ticket7 = curl_exec($curl_connection7);
    curl_close($curl_connection7);
    $curl_connection8 = curl_init();
    curl_setopt_array( $curl_connection8, $options );
    $ticket8 = curl_exec($curl_connection8);
    curl_close($curl_connection8);
?>
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
<!--Script auto load real time user-->
<script type="text/javascript">
    $(document).ready(function(){
        $('#auto');
        refresh();
    });
    function refresh(){
        setTimeout(function(){
            $('#auto').load("load");
            refresh();
        }, 200);
    }
</script>
<!-- tableau -->
<script type='text/javascript' src="https://smartanalytics.udata.id/javascripts/api/tableau-2.min.js"></script>
<script type="text/javascript">
    chart3();
    var viz3;
    var viz4;
    var viz5;
    var viz6;
    var viz7;
    var viz8;
    //chart3
    function chart3() {
        var containerDiv3 = document.getElementById("stat3"),
            url = "<?php echo $url , $ticket3, $view, $view3;?>";
            options = {
                hideTabs: true,
                hideToolbar: true,
                width: "100%",
                height: "400px",
                onFirstInteractive : () => {
                    chart8();
                }
            };
        viz3 = new tableau.Viz(containerDiv3, url, options);
    }
    function exportToPDF() {
        viz3.showExportPDFDialog();
    }
    function exportToImage(){
        viz3.showExportImageDialog();
    }
    function exportToCrosstab(){
        viz3.showExportCrossTabDialog();
    }
    function exportToData(){
        viz3.showExportDataDialog();
    }
    //chart4
    function chart4() {
        var containerDiv4 = document.getElementById("stat4"),
            url = "<?php echo $url , $ticket4, $view, $view4;?>";
            options = {
                hideTabs: true,
                hideToolbar: true,
                width: "100%",
                height: "400px",
                onFirstInteractive : () => {
                    chart5();
                }
            };
        viz4 = new tableau.Viz(containerDiv4, url, options);
    }
    function exportToPDF() {
        viz4.showExportPDFDialog();
    }
    function exportToImage(){
        viz4.showExportImageDialog();
    }
    function exportToCrosstab(){
        viz4.showExportCrossTabDialog();
    }
    function exportToData(){
        viz4.showExportDataDialog();
    }
    //chart5
    function chart5() {
        var containerDiv5 = document.getElementById("stat5"),
            url = "<?php echo $url , $ticket5, $view, $view5;?>";
            options = {
                hideTabs: true,
                hideToolbar: true,
                width: "100%",
                height: "400px",
                onFirstInteractive : () => {
                    chart6();
                }
            };
        viz5 = new tableau.Viz(containerDiv5, url, options);
    }
    function exportToPDF() {
        viz5.showExportPDFDialog();
    }
    function exportToImage(){
        viz5.showExportImageDialog();
    }
    function exportToCrosstab(){
        viz5.showExportCrossTabDialog();
    }
    function exportToData(){
        viz5.showExportDataDialog();
    }
    //chart6
    function chart6() {
        var containerDiv6 = document.getElementById("stat6"),
            url = "<?php echo $url , $ticket6, $view, $view6;?>";
            options = {
                hideTabs: true,
                hideToolbar: true,
                width: "100%",
                height: "400px",
                onFirstInteractive : () => {
                    chart7();
                }
            };
        viz6 = new tableau.Viz(containerDiv6, url, options);
    }
    function exportToPDF() {
        viz6.showExportPDFDialog();
    }
    function exportToImage(){
        viz6.showExportImageDialog();
    }
    function exportToCrosstab(){
        viz6.showExportCrossTabDialog();
    }
    function exportToData(){
        viz6.showExportDataDialog();
    }
    //chart7
    function chart7() {
        var containerDiv7 = document.getElementById("stat7"),
            url = "<?php echo $url , $ticket7, $view, $view7;?>";
            options = {
                hideTabs: true,
                hideToolbar: true,
                width: "100%",
                height: "400px",
            };
        viz7 = new tableau.Viz(containerDiv7, url, options);
    }
    function exportToPDF() {
        viz7.showExportPDFDialog();
    }
    function exportToImage(){
        viz7.showExportImageDialog();
    }
    function exportToCrosstab(){
        viz7.showExportCrossTabDialog();
    }
    function exportToData(){
        viz7.showExportDataDialog();
    }
    //chart8
    function chart8() {
        var containerDiv8 = document.getElementById("stat8"),
            url = "<?php echo $url , $ticket8, $view, $view8;?>";
            options = {
                hideTabs: true,
                hideToolbar: true,
                width: "100%",
                height: "400px",
                onFirstInteractive : () => {
                    chart4();
                }
            };
        viz8 = new tableau.Viz(containerDiv8, url, options);
    }
    function exportToPDF() {
        viz8.showExportPDFDialog();
    }
    function exportToImage(){
        viz8.showExportImageDialog();
    }
    function exportToCrosstab(){
        viz8.showExportCrossTabDialog();
    }
    function exportToData(){
        viz8.showExportDataDialog();
    }
</script>
<script src="{{ asset('assets/dataTables/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/dataTables/js/dataTables.bootstrap.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $("#dataTableHistoryPerizinan").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.datatable.perizinanPage') }}",
            columns: [
                {data: 'id_access', name: 'id_access'},
                {data: 'date_access', name: 'date_access'},
                {data: 'name', name: 'name'},
                {data: 'name_page', name: 'name_page'},
                {data: 'kategori', name: 'kategori'}
            ]
        });
        $("#dataTable_length").addClass('pull-left');
        $("#dataTable_info").addClass('pull-left');
    });
    $(document).ready(function(){
        $("#dataTableHistoryKependudukan").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.datatable.kependudukanPage') }}",
            columns: [
                {data: 'id_access', name: 'id_access'},
                {data: 'date_access', name: 'date_access'},
                {data: 'name', name: 'name'},
                {data: 'name_page', name: 'name_page'},
                {data: 'kategori', name: 'kategori'}
            ]
        });
        $("#dataTable_length").addClass('pull-left');
        $("#dataTable_info").addClass('pull-left');
    });
    $(document).ready(function(){
        $("#dataTableHistoryKemiskinan").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.datatable.kemiskinanPage') }}",
            columns: [
                {data: 'id_access', name: 'id_access'},
                {data: 'date_access', name: 'date_access'},
                {data: 'name', name: 'name'},
                {data: 'name_page', name: 'name_page'},
                {data: 'kategori', name: 'kategori'}
            ]
        });
        $("#dataTable_length").addClass('pull-left');
        $("#dataTable_info").addClass('pull-left');
    });
    $(document).ready(function(){
        $("#dataTableLogin").DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('api.datatable.tableLogin') }}",
            columns: [
                {data: 'id_login', name: 'id_login'},
                {data: 'date_login', name: 'date_login'},
                {data: 'date_logout', name: 'date_logout'},
                {data: 'name', name: 'name'},
                {data: 'name_satda', name: 'name_satda'},
                {data: 'name_skpd', name: 'name_skpd'},
                {data: 'name_level', name: 'name_level'}
            ]
        });
        $("#dataTable_length").addClass('pull-left');
        $("#dataTable_info").addClass('pull-left');
    });
</script>
@endsection