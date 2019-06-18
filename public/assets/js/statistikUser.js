Highcharts.chart('jumlahUser', {
    chart: {
      type: 'column'
    },
    title: {
      text: ''
    },
    xAxis: {
      categories: [
        '2018',
        '2017',
        '2016',
        '2015'
      ],
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
        '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
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
      name: 'Super Admin',
      data: [49.9, 71.5, 106.4, 129.2]
  
    }, {
      name: 'Admin Provinsi',
      data: [83.6, 78.8, 98.5, 93.4]
  
    }, {
      name: 'Admin Kabupaten/Kota',
      data: [48.9, 38.8, 39.3, 41.4]
  
    }, {
      name: 'User Provinsi',
      data: [42.4, 33.2, 34.5, 39.7]
  
    }, {
        name: 'User Kota',
        data: [42.4, 33.2, 34.5, 39.7]
    
    }]
  });


  Highcharts.chart('jumlahUserWilayah', {
    chart: {
      type: 'column'
    },
    title: {
      text: ''
    },
    xAxis: {
      categories: [
        '2018',
        '2017',
        '2016',
        '2015'
      ],
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
        '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
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
      name: 'Super Admin',
      data: [49.9, 71.5, 106.4, 129.2]
  
    }, {
      name: 'Admin Provinsi',
      data: [83.6, 78.8, 98.5, 93.4]
  
    }, {
      name: 'Admin Kabupaten/Kota',
      data: [48.9, 38.8, 39.3, 41.4]
  
    }, {
      name: 'User Provinsi',
      data: [42.4, 33.2, 34.5, 39.7]
  
    }, {
        name: 'User Kota',
        data: [42.4, 33.2, 34.5, 39.7]
    
    }]
});


Highcharts.chart('jumlahUserBulan', {
    chart: {
      type: 'column'
    },
    title: {
      text: ''
    },
    xAxis: {
      categories: [
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember',
      ],
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
        '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
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
      name: 'Super Admin',
      data: [49.9, 71.5, 106.4, 129.2, 83.6, 78.8, 98.5, 93.4, 48.9, 38.8, 39.3, 41.4]
  
    }, {
      name: 'Admin Provinsi',
      data: [83.6, 78.8, 98.5, 93.4, 48.9, 38.8, 39.3, 41.4, 42.4, 33.2, 34.5, 39.7]
  
    }, {
      name: 'Admin Kabupaten/Kota',
      data: [48.9, 38.8, 39.3, 41.4, 42.4, 33.2, 34.5, 39.7, 42.4, 33.2, 34.5, 39.7]
  
    }, {
      name: 'User Provinsi',
      data: [42.4, 33.2, 34.5, 39.7, 42.4, 33.2, 34.5, 39.7, 49.9, 71.5, 106.4, 129.2]
  
    }, {
        name: 'User Kota',
        data: [42.4, 33.2, 34.5, 39.7, 49.9, 71.5, 106.4, 129.2, 83.6, 78.8, 98.5, 93.4]
    
    }]
  });

  Highcharts.chart('jumlahUserBulanWilayah', {
    chart: {
      type: 'column'
    },
    title: {
      text: ''
    },
    xAxis: {
      categories: [
        'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember',
      ],
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
        '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
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
      name: 'Super Admin',
      data: [49.9, 71.5, 106.4, 129.2, 83.6, 78.8, 98.5, 93.4, 48.9, 38.8, 39.3, 41.4]
  
    }, {
      name: 'Admin Provinsi',
      data: [83.6, 78.8, 98.5, 93.4, 48.9, 38.8, 39.3, 41.4, 42.4, 33.2, 34.5, 39.7]
  
    }, {
      name: 'Admin Kabupaten/Kota',
      data: [48.9, 38.8, 39.3, 41.4, 42.4, 33.2, 34.5, 39.7, 42.4, 33.2, 34.5, 39.7]
  
    }, {
      name: 'User Provinsi',
      data: [42.4, 33.2, 34.5, 39.7, 42.4, 33.2, 34.5, 39.7, 49.9, 71.5, 106.4, 129.2]
  
    }, {
        name: 'User Kota',
        data: [42.4, 33.2, 34.5, 39.7, 49.9, 71.5, 106.4, 129.2, 83.6, 78.8, 98.5, 93.4]
    
    }]
  });