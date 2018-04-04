<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="containerx" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<script type="text/javascript">
    Highcharts.chart('containerx', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Publicacicones y compras por mes del estuidante'
    },
    subtitle: {
        text: 'No se incluyen objetos perdidos'
    },
    xAxis: {
        categories: [
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
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
        name: 'Publicaiones',
        data: [49.9, 71.5, 106.4, 129.2, 144.0]

    },{
        name: 'Compras',
        data: [42.4, 33.2, 34.5, 39.7, 52.6]

    }]
});  
</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

<script type="text/javascript">
    

Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Calificacion de publicaciones'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },
    series: [{
        name: 'Porcentaje',
        colorByPoint: true,
        data: [{
            name: 'Buena',
            y: 61.41,
            sliced: true,
            selected: true
        }, {
            name: 'Mala',
            y: 12.61
        }]
    }]
});

</script>