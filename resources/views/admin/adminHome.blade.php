@extends('layouts.layoutAdmin')

@section('titleContent')
<h1 class="spaceTitle"><strong>Beranda Super Admin</strong></h1>
@endsection

@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading panel-head">
                        <h4 class="panel-title">Jumlah SATDA</h4>
                    </div>
                    <div class="panel-body text-center">
                        <h1>{{$satda}}</h1><br/>
                        <h4>SATDA</h4>
                    </div>
                    <div class="panel-footer text-center">
                        <h4><em class="fa fa-building-o"></em></h4>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading panel-head">
                        <h4 class="panel-title">Jumlah SKPD</h4>
                    </div>
                    <div class="panel-body text-center">
                        <h1>{{$skpd}}</h1><br/>
                        <h4>SKPD</h4>
                    </div>
                    <div class="panel-footer text-center">
                        <h4><em class="fa fa-building-o"></em></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="margin-top:11%;">
                <div class="panel panel-default">
                    <div class="panel-heading panel-head">
                        <h4 class="panel-title">Jumlah OTDA</h4>
                    </div>
                    <div class="panel-body text-center">
                        <h1>{{$otda}}</h1><br/>
                        <h4>OTDA</h4>
                    </div>
                    <div class="panel-footer text-center">
                        <h4><em class="fa fa-university"></em></h4>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="margin-top:11%;">
                <div class="panel panel-default">
                    <div class="panel-heading panel-head">
                        <h4 class="panel-title">Jumlah Indikator</h4>
                    </div>
                    <div class="panel-body text-center">
                        <h1>{{$indi}}</h1><br/>
                        <h4>Indikator</h4>
                    </div>
                    <div class="panel-footer text-center">
                        <h4><em class="fa fa-tasks"></em></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading panel-head">
                        <h4 class="panel-title">Jumlah Pengguna (<strong>Saat Ini</strong>)</h4>
                    </div>
                    <div class="panel-body">
                        <div id="user"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('titleFoot')
<div class="row" style="margin:1.5% auto;margin-top:2%;">
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
<script src="{{ asset('assets/vendor/highcharts/highcharts_v610.js') }}"></script>
<script src="{{ asset('assets/vendor/highcharts/highcharts-3d.js') }}"></script>
<script src="{{ asset('assets/vendor/highcharts/highcharts-more.js') }}"></script>
<script type="text/javascript">
    $(function () {
        var name_level = <?php echo $level_name; ?>;
        var users_jumlah = <?php echo $users_jumlah; ?>;
        Highcharts.chart('user', {
            chart: {
                type: 'column'
            },
            title: {
                text: ''
            },
            xAxis: {
                categories: name_level,
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Jumlah',
                data: users_jumlah,
                color: '#5c8790'
            }]
        });
    });
</script>
@endsection