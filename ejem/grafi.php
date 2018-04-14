<?php

    $titulo ="hola";
    $Febrero=0;
    $Febre=0;
    $Marzo=0;
    $Mar=0;
    $Abril=0;
    $Abr=0;
    $Mayo=0;
    $Ma=0;
    $Junio=0;
    $Jun=0;
    $mes =date("m");
    if ($mes > 2) {
       $Febrero=5;
       $Febre=6;
    }
    if ($mes > 3) {
       $Marzo=9;
       $Mar=9;
    }
    if ($mes > 4) {
       $Abril=21;
       $Abr=23;
    }
    if ($mes > 5) {
       $Mayo=15;
       $Ma=5;
    }
    if ($mes > 6) {
       $Junio=4;
       $Jun=6;
    }
?>

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
        <?php echo "data: [$Febrero, $Marzo, $Abril, $Mayo, $Junio]";?>

    },{
        name: 'Compras',
        <?php echo " data: [$Febre, $Mar, $Abr, $Ma, $Jun]";?>

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