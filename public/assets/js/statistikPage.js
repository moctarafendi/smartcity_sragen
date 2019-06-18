  Highcharts.chart('halamanHarian', {
    chart: {
      type: 'column'
    },
    title: {
      text: ''
    },
    xAxis: {
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
      name: '1',
      data: [49.9]
  
    }, {
      name: '2',
      data: [83.6]
  
    }, {
      name: '3',
      data: [48.9]
  
    }, {
      name: '4',
      data: [42.4]
  
    }, {
        name: '5',
        data: [42.4]
    
    },{
      name: '6',
      data: [49.9]
  
    }, {
      name: '7',
      data: [83.6]
  
    }, {
      name: '8',
      data: [48.9]
  
    }, {
      name: '9',
      data: [42.4]
  
    }, {
        name: '10',
        data: [42.4]
    
    },{
      name: '11',
      data: [48.9]
  
    }, {
      name: '12',
      data: [42.4]
  
    }, {
        name: '13',
        data: [42.4]
    
    },{
      name: '14',
      data: [42.4]
  
  },{
    name: '15',
    data: [49.9]

  }, {
    name: '16',
    data: [83.6]

  }, {
    name: '17',
    data: [48.9]

  },{
    name: '18',
    data: [42.4]

},{
  name: '19',
  data: [48.9]

}, {
  name: '20',
  data: [42.4]

}]
  });


  Highcharts.chart('halamanMingguan', {
    chart: {
      type: 'column'
    },
    title: {
      text: ''
    },
    xAxis: {
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
    name: 'Week 1',
    data: [48.9]

  },{
    name: 'Week 2',
    data: [42.4]

},{
  name: 'Week 3',
  data: [48.9]

}, {
  name: 'Week 4',
  data: [42.4]

}]
  });



  Highcharts.chart('halamanBulanan', {
    title:{
      text: ''
    },
    xAxis: {
        type: 'datetime'
    },

    plotOptions: {
        series: {
            pointStart: Date.UTC(2018, 1),
            pointInterval: 30 * 24 * 3600 * 1000 // one day
        }
    },

    series: [{
        data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
    }]
});

  Highcharts.chart('halamanTahun', {
    chart: {
      type: 'column'
    },
    title: {
      text: ''
    },
    // xAxis: {
    //   categories: [
    //     '2017',
    //     '2016',
    //     '2015'
    //   ],
    //   crosshair: true
    // },
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
      name: 'Data Perizinan',
      data: [71.5]
  
    }, {
      name: 'Data Status Perizinan',
      data: [78.8]
  
    }, {
      name: 'IKU Status Perizinan Selesai',
      data: [38.8]
  
    }]
  });


  Highcharts.chart('halamanTahun3', {
    chart: {
      type: 'column'
    },
    title: {
      text: ''
    },
    // xAxis: {
    //   categories: [
    //     '2018',
    //     '2017',
    //     '2016',
    //     '2015'
    //   ],
    //   crosshair: true
    // },
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
      name: 'Data Kemiskinan (Simsaraswati)',
      data: [49.9]
  
    }, {
      name: 'Data Kemiskinan (BPS)',
      data: [83.6]
  
    }, {
      name: 'IKU Angka Kemiskinan (Simsaraswati)',
      data: [48.9]
  
    }]
  });


  Highcharts.chart('halamanTahun2', {
    chart: {
      type: 'column'
    },
    title: {
      text: ''
    },
    // xAxis: {
    //   categories: [
    //     '2018',
    //     '2017',
    //     '2016'
    //   ],
    //   crosshair: true
    // },
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
      data: [49.9, 71.5, 106.4]
  
    }, {
      name: 'Admin Provinsi',
      data: [83.6, 78.8, 98.5]
  
    }, {
      name: 'Admin Kabupaten/Kota',
      data: [48.9, 38.8, 39.3]
  
    }, {
      name: 'User Provinsi',
      data: [42.4, 33.2, 34.5]
  
    }, {
        name: 'User Kota',
        data: [42.4, 33.2, 34.5]
    
    }]
  });