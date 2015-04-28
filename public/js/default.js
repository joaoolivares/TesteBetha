$(function () {
    $('#grafico').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafico de acessos'
        },
        
        xAxis: {
            categories: [
                'Jan',
                'Fev',
                'Mar',
                'Abr',
                
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Pessoas'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} pessoas</b></td></tr>',
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
        series: [{
            name: 'Visitas',
            data: [49.9, 71.5, 106.4, 129.2]

        }, {
            name: 'Downloads',
            data: [83.6, 78.8, 98.5, 93.4]

        }, {
            name: 'Impressões',
            data: [42.4, 33.2, 34.5, 39.7]

        }]
    });
});