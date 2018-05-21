<?php
  $mysql_host = 'den1.mysql6.gear.host';
  $mysql_user = 'basess';
  $mysql_pass = 'Algodecente1.';
  $mysql_bd   = 'basess';

  $mysqli = new mysqli($mysql_host, $mysql_user, $mysql_pass, $mysql_bd);
  $mysqli->set_charset("UTF8");

  if($mysqli->connect_errno){
    echo "Error en la conexión.";
    exit;
  }

function publicacionesxalum($id,$ini,$fin){
    global $mysqli;
    $sql = "select COUNT(*) as cantidad from productos where tipo=1 and vendedor=".$id." and (fecha BETWEEN '".$ini."' AND '".$fin."');";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
    $res = $resultado->fetch_array(); 
    return $res['cantidad'];
}

function ventasxalum($id,$ini,$fin){
    global $mysqli;
    $sql = "select COUNT(*) as cantidad from productos where estado=5 and tipo=1 and vendedor=".$id." and (fecha BETWEEN '".$ini."' AND '".$fin."');";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
    $res = $resultado->fetch_array(); 
    return $res['cantidad'];
}

function comprasxalum($id,$ini,$fin){
    global $mysqli;
    $sql = "select COUNT(*) as cantidad from productos where estado=5 and tipo=1 and comprador=".$id." and (fecha BETWEEN '".$ini."' AND '".$fin."');";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
    $res = $resultado->fetch_array(); 
    return $res['cantidad'];
}

function cantidad($can,$id,$tipo){
        $u = date("Y-m-d", mktime(0, 0, 0, $can+1, 1, date("Y")));
        $e = date("Y-m-d", mktime(0, 0, 0, $can, 1, date("Y")));
        if($tipo=="ventas")
        $lsjfl = ventasxalum($id,$e,$u);
        if($tipo=="compras")
        $lsjfl = comprasxalum($id,$e,$u);
        if($tipo=="publicaciones")
        $lsjfl = publicacionesxalum($id,$e,$u);
    settype($lsjfl, "integer");
    return $lsjfl;
}
function grafiAlumno($alumno,$periodo){
    $unoc = array(0,0,0);
    $dos = array(0,0,0);
    $tres = array(0,0,0);
    $cuatro = array(0,0,0);
    $cinco = array(0,0,0);
    $mes =date("m");
    if ($mes >= ($periodo)) {
       $uno[0]=cantidad($periodo,$alumno,"publicaciones");
       $uno[1]=cantidad($periodo,$alumno,"compras");
       $uno[2]=cantidad($periodo,$alumno,"ventas");
    }
    if ($mes >= ($periodo+1)) {
       $dos[0]=cantidad(($periodo+1),$alumno,"publicaciones");
       $dos[1]=cantidad(($periodo+1),$alumno,"compras");
       $dos[2]=cantidad(($periodo+1),$alumno,"ventas");
    }
    if ($mes >= ($periodo+2)) {
       $tres[0]=cantidad(($periodo+2),$alumno,"publicaciones");
       $tres[1]=cantidad(($periodo+2),$alumno,"compras");
       $tres[2]=cantidad(($periodo+2),$alumno,"ventas");
    }
    if ($mes >= ($periodo+3)) {
       $cuatro[0]=cantidad(($periodo+3),$alumno,"publicaciones");
       $cuatro[1]=cantidad(($periodo+3),$alumno,"compras");
       $cuatro[2]=cantidad(($periodo+3),$alumno,"ventas");
    }
    if ($mes >= ($periodo+4)) {
       $cinco[0]=cantidad(($periodo+4),$alumno,"publicaciones");
       $cinco[1]=cantidad(($periodo+4),$alumno,"compras");
       $cinco[2]=cantidad(($periodo+4),$alumno,"ventas");
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
        text: 'Publicacicones, compras y ventas por mes del estuidante'
    },
    subtitle: {
        text: 'No se incluyen objetos perdidos'
    },
    xAxis: {
        categories: [
        <?php if ($periodo==2){ echo "'Febrero', 'Marzo','Abril','Mayo','Junio'";} else {echo "'Agosto', 'Septiembre','Octubre','Noviembre','Diciembre'";}?>
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
        <?php echo "data: [$uno[0], $dos[0], $tres[0], $cuatro[0], $cinco[0]]";?>

    },{
        name: 'Compras',
        <?php echo "data: [$uno[1], $dos[1], $tres[1], $cuatro[1], $cinco[1]]";?>

    },{
        name: 'Ventas',
        <?php echo "data: [$uno[2], $dos[2], $tres[2], $cuatro[2], $cinco[2]]";?>

    }]
});  
</script>
<?php } 

grafiAlumno(14300191,5);
?>

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