@extends((!isset(Auth::user()->id))? 'layouts.default': ((Auth::user()->level_id == '1') ? 'layouts.layoutAdmin' : 'layouts.layoutAfterLogin'))

@section('assets-top')
<link href="{{ asset('assets/dataTables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('titleContent')
<h1 class="spaceTitle"><strong>Statistik Halaman</strong></h1>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading panel-head">
                <h4 class="panel-title">Chart Statistik Halaman</h4>
            </div>
            <div class="panel-body">
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
                                    <div class="panel-body rights">
                                        <div class="dropdowns">
                                            <button class="dropbtns fa fa-download fa-lg"></button>
                                            <div class="dropdowns-content">
                                                <div onclick="exportToImage1()">Download Image</div>
                                                <div onclick="exportToPDF1()">Download PDF</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="paddingchart">
                                        <div class="panel-body">
                                            <div class="row"></div></br>
                                            <div id="stat1"></div>
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
                                                <div onclick="exportToImage2()">Download Image</div>
                                                <div onclick="exportToPDF2()">Download PDF</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="paddingchart">
                                        <div class="panel-body">
                                            <div class="row"></div></br>
                                            <div id="stat2"></div>
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
                                                <div onclick="exportToImage3()">Download Image</div>
                                                <div onclick="exportToPDF3()">Download PDF</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="paddingchart">
                                        <div class="panel-body">
                                                <div class="row">
                                                </div></br>
                                            <div id="stat3"></div>
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
    $view1 ="Statistik/StatistikPagePerizinan?:iid=1";
    $view2 ="Statistik/StatistikPageKependudukan?:iid=3";
    $view3 ="Statistik/StatistikPageKemiskinan?:iid=5";
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
    $ticket1 = curl_exec($curl_connection1);
    curl_close($curl_connection1);
    $curl_connection2 = curl_init();
    curl_setopt_array( $curl_connection2, $options );
    $ticket2 = curl_exec($curl_connection2);
    curl_close($curl_connection2);
    $curl_connection3 = curl_init();
    curl_setopt_array( $curl_connection3, $options );
    $ticket3 = curl_exec($curl_connection3);
    curl_close($curl_connection3);
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
    chart1();
    var viz1;
    var viz2;
    var viz3;
    //chart1
    function chart1() {
        var containerDiv1 = document.getElementById("stat1"),
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
        viz1 = new tableau.Viz(containerDiv1, url, options);
    }
    function exportToPDF1() {
        viz1.showExportPDFDialog();
    }
    function exportToImage1(){
        viz1.showExportImageDialog();
    }
    //chart2
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
    //chart3
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
<!-- dataTables -->
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
</script>
@endsection