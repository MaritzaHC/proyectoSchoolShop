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
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<?php
function publicaVendedor($ini,$fin){
    global $mysqli;
    $sql = "select COUNT(*) as cantidad from productos where (tipo=2 or tipo=3) and (fecha BETWEEN '".$ini."' AND '".$fin."');";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
    $res = $resultado->fetch_array();
    return $res['cantidad'];
} 
function comprasVendedor($ini,$fin){
    global $mysqli;
    $sql = "select COUNT(*) as cantidad from factura_vendedor where estado=5 and (fecha BETWEEN '".$ini."' AND '".$fin."');";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
    $res = $resultado->fetch_array();
    return $res['cantidad'];
}                                          
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/
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
function comprasxalumMal($id,$ini,$fin){
    global $mysqli;
    $sql = "select COUNT(*) as cantidad from productos, calificacion_alumno where productos.estado=5 and productos.tipo=1 and productos.comprador=".$id." and calificacion_alumno.productos=productos.idProductos and calificacion_alumno.calificacionComprador<2 and (productos.fecha BETWEEN '".$ini."' AND '".$fin."');";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
    $res = $resultado->fetch_array(); 
    return $res['cantidad'];
}
function ventasxalumMal($id,$ini,$fin){
    global $mysqli;
    $sql = "select COUNT(*) as cantidad from productos, calificacion_alumno where productos.estado=5 and productos.tipo=1 and productos.vendedor=".$id." and calificacion_alumno.productos=productos.idProductos and calificacion_alumno.calificacionVendedor<2 and (productos.fecha BETWEEN '".$ini."' AND '".$fin."');";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
    $res = $resultado->fetch_array(); 
    return $res['cantidad'];
}
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/
function publicacionesAlum($ini,$fin){
    global $mysqli;
    $sql = "select COUNT(*) as cantidad from productos where tipo=1 and (fecha BETWEEN '".$ini."' AND '".$fin."');";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
    $res = $resultado->fetch_array(); 
    return $res['cantidad'];
}
function comprasAlum($ini,$fin){
    global $mysqli;
    $sql = "select COUNT(*) as cantidad from productos where estado=5 and tipo=1 and (fecha BETWEEN '".$ini."' AND '".$fin."');";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
    $res = $resultado->fetch_array(); 
    return $res['cantidad'];
}
function comprasMalAlum($ini,$fin){
    global $mysqli;
    $sql = "select COUNT(*) as cantidad from productos, calificacion_alumno where productos.estado=5 and productos.tipo=1 and calificacion_alumno.productos=productos.idProductos and calificacion_alumno.calificacionComprador<2 and (productos.fecha BETWEEN '".$ini."' AND '".$fin."');";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
    $res = $resultado->fetch_array(); 
    return $res['cantidad'];
}
function ventasMalAlum($ini,$fin){
    global $mysqli;
    $sql = "select COUNT(*) as cantidad from productos, calificacion_alumno where productos.estado=5 and productos.tipo=1 and calificacion_alumno.productos=productos.idProductos and calificacion_alumno.calificacionVendedor<2 and (productos.fecha BETWEEN '".$ini."' AND '".$fin."');";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
    $res = $resultado->fetch_array(); 
    return $res['cantidad'];
}
/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/
function canAlumnos(){
    global $mysqli;
    $sql = "SELECT COUNT(*) as cantidad FROM alumno where calificacionV>2 and calificacionC>2;";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
    $res = $resultado->fetch_array(); 
    return $res['cantidad'];
}
function canAlumnosMalVendedor(){
    global $mysqli;
    $sql = "select COUNT(*) as cantidad from alumno where calificacionV<2;";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
    $res = $resultado->fetch_array(); 
    return $res['cantidad'];
}
function canAlumnosMalComprador(){
    global $mysqli;
    $sql = "select COUNT(*) as cantidad from alumno where calificacionC<2;";
    if(!$resultado = $mysqli->query($sql)){
       echo "Error al consultar";
       exit;
    }
    $res = $resultado->fetch_array(); 
    return $res['cantidad'];
}
/*Datos por alumno de publicaciones*/
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
/*malas clificaciones por alumno*/
function cantidadMalasxalumno($id, $can,$tipo){
        $u = date("Y-m-d", mktime(0, 0, 0, $can+1, 1, date("Y")));
        $e = date("Y-m-d", mktime(0, 0, 0, $can, 1, date("Y")));
        if($tipo=="ventas")
        $lsjfl = ventasxalumMal($id,$e,$u);
        if($tipo=="compras")
        $lsjfl = comprasxalumMal($id,$e,$u);
    settype($lsjfl, "integer");
    return $lsjfl;
}
/*General con todas las publicaciones de los alumnos*/
function cantidadGeneralAlum($can,$tipo){
        $u = date("Y-m-d", mktime(0, 0, 0, $can+1, 1, date("Y")));
        $e = date("Y-m-d", mktime(0, 0, 0, $can, 1, date("Y")));
        if($tipo=="publicaciones")
        $lsjfl = publicacionesAlum($e,$u);
        if($tipo=="compras")
        $lsjfl = comprasAlum($e,$u);
        if($tipo=="ventasM")
        $lsjfl =comprasMalAlum($e,$u);
        if($tipo=="comprasM")
        $lsjfl = ventasMalAlum($e,$u);
    settype($lsjfl, "integer");
    return $lsjfl;
}
function cantidadVendedores($can,$tipo){
        $u = date("Y-m-d", mktime(0, 0, 0, $can+1, 1, date("Y")));
        $e = date("Y-m-d", mktime(0, 0, 0, $can, 1, date("Y")));
        if($tipo=="publica")
        $lsjfl = publicaVendedor($e,$u);
        if($tipo=="vende")
        $lsjfl = comprasVendedor($e,$u);
    settype($lsjfl, "integer");
    return $lsjfl;
}

function grafixAlumno($alumno,$periodo,$num){
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
    <div id=<?php echo "containerx".$num;?> style="min-width: 310px; height: 400px; margin: 0 auto"></div>

    <script type="text/javascript">
        Highcharts.chart(<?php echo "containerx".$num;?>, {
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
function grafixAlumnoMala($alumno,$periodo,$num){
    $unoc = array(0,0);
    $dos = array(0,0);
    $tres = array(0,0);
    $cuatro = array(0,0);
    $cinco = array(0,0);
    $mes =date("m");
    if ($mes >= ($periodo)) {
       $uno[0]=cantidadMalasxalumno($periodo,$alumno,"compras");
       $uno[1]=cantidadMalasxalumno($periodo,$alumno,"ventas");
    }
    if ($mes >= ($periodo+1)) {
       $dos[0]=cantidadMalasxalumno(($periodo+1),$alumno,"compras");
       $dos[1]=cantidadMalasxalumno(($periodo+1),$alumno,"ventas");
    }
    if ($mes >= ($periodo+2)) {
       $tres[0]=cantidadMalasxalumno(($periodo+2),$alumno,"compras");
       $tres[1]=cantidadMalasxalumno(($periodo+2),$alumno,"ventas");
    }
    if ($mes >= ($periodo+3)) {
       $cuatro[0]=cantidadMalasxalumno(($periodo+3),$alumno,"compras");
       $cuatro[1]=cantidadMalasxalumno(($periodo+3),$alumno,"ventas");
    }
    if ($mes >= ($periodo+4)) {
       $cinco[0]=cantidadMalasxalumno(($periodo+4),$alumno,"compras");
       $cinco[1]=cantidadMalasxalumno(($periodo+4),$alumno,"ventas");
    }
    ?>
    <div id=<?php echo "containerx".$num;?> style="min-width: 310px; height: 400px; margin: 0 auto"></div>

    <script type="text/javascript">
        Highcharts.chart(<?php echo "containerx".$num;?>, {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Cantidad de malas calificaciones como comprador y vendedor por mes del estuidante'
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
            name: 'Compras',
            <?php echo "data: [$uno[0], $dos[0], $tres[0], $cuatro[0], $cinco[0]]";?>

        },{
            name: 'Ventas',
            <?php echo "data: [$uno[1], $dos[1], $tres[1], $cuatro[1], $cinco[1]]";?>

        }]
    });  
    </script>
<?php }  
function grafiAlumno($periodo,$num){
    $unoc = array(0,0,0,0);
    $dos = array(0,0,0,0);
    $tres = array(0,0,0,0);
    $cuatro = array(0,0,0,0);
    $cinco = array(0,0,0,0);
    $mes =date("m");
    if ($mes >= ($periodo)) {
       $uno[0]=cantidadGeneralAlum($periodo,"compras");
       $uno[1]=cantidadGeneralAlum($periodo,"publicaciones");
       $uno[2]=cantidadGeneralAlum($periodo,"ventasM");
       $uno[3]=cantidadGeneralAlum($periodo,"comprasM");
    }
    if ($mes >= ($periodo+1)) {
       $dos[0]=cantidadGeneralAlum(($periodo+1),"compras");
       $dos[1]=cantidadGeneralAlum(($periodo+1),"publicaciones");
       $dos[2]=cantidadGeneralAlum(($periodo+1),"ventasM");
       $dos[3]=cantidadGeneralAlum(($periodo+1),"comprasM");
    }
    if ($mes >= ($periodo+2)) {
       $tres[0]=cantidadGeneralAlum(($periodo+2),"compras");
       $tres[1]=cantidadGeneralAlum(($periodo+2),"publicaciones");
       $tres[2]=cantidadGeneralAlum(($periodo+2),"ventasM");
       $tres[3]=cantidadGeneralAlum(($periodo+2),"comprasM");
    }
    if ($mes >= ($periodo+3)) {
       $cuatro[0]=cantidadGeneralAlum(($periodo+3),"compras");
       $cuatro[1]=cantidadGeneralAlum(($periodo+3),"publicaciones");
       $cuatro[2]=cantidadGeneralAlum(($periodo+3),"ventasM");
       $cuatro[3]=cantidadGeneralAlum(($periodo+3),"comprasM");
    }
    if ($mes >= ($periodo+4)) {
       $cinco[0]=cantidadGeneralAlum(($periodo+4),"compras");
       $cinco[1]=cantidadGeneralAlum(($periodo+4),"publicaciones");
       $cinco[2]=cantidadGeneralAlum(($periodo+4),"ventasM");
       $cinco[3]=cantidadGeneralAlum(($periodo+4),"comprasM");
    }
    ?>
    <div id=<?php echo "containerx".$num;?> style="min-width: 310px; height: 400px; margin: 0 auto"></div>

    <script type="text/javascript">
        Highcharts.chart(<?php echo "containerx".$num;?>, {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Cantidad de publicaciones y compras de todos los estudiantes por mes, asi como sus calificaciones'
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
            name: 'Compras',
            <?php echo "data: [$uno[0], $dos[0], $tres[0], $cuatro[0], $cinco[0]]";?>

        },{
            name: 'Publicaciones',
            <?php echo "data: [$uno[1], $dos[1], $tres[1], $cuatro[1], $cinco[1]]";?>

        },{
            name: 'Mala calificacion en publicaciones vendedor',
            <?php echo "data: [$uno[2], $dos[2], $tres[2], $cuatro[2], $cinco[2]]";?>

        },{
            name: 'Mala calificacion en publicaciones comprador',
            <?php echo "data: [$uno[3], $dos[3], $tres[3], $cuatro[3], $cinco[3]]";?>

        }]
    });  
    </script>
<?php }  
function grafiAlumnoMala($num){
    $num2 = canAlumnosMalVendedor();
    $num3 = canAlumnosMalComprador();
    $num2=5;
    $num3=6;
     ?>
    <div id=<?php echo "containerx".$num;?> style="min-width: 310px; height: 400px; margin: 0 auto"></div>

    <script type="text/javascript">
        Highcharts.chart(<?php echo "containerx".$num;?>, {
        chart: {
            type: 'pie'
        },
        title: {
            text: 'Alumnos con baja calificacion como vendedor y comprador'
        },
        plotOptions: {
            series: {
                dataLabels: {
                    enabled: true,
                    format: '{point.name}: {point.y:.0f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.0f}</b> alumnos<br/>'
        },

        "series": [
            {
                "name": "Browsers",
                "colorByPoint": true,
                "data": [
                    {
                        "name": "Mala calificacion como comprador",
                        "y": <?php echo $num3; ?>,
                        "drilldown": "Mala calificacion como comprador"
                    },
                    {
                        "name": "Mala calificacion como vendedor",
                        "y": <?php echo $num2; ?>,
                        "drilldown": "Mala calificacion como vendedor"
                    }
                   
                ]
            }
        ]
    });
    </script> <?php 
}
function grafiVendedores($periodo,$num){
    $unoc = array(0,0);
    $dos = array(0,0);
    $tres = array(0,0);
    $cuatro = array(0,0);
    $cinco = array(0,0);
    $mes =date("m");
    if ($mes >= ($periodo)) {
       $uno[0]=cantidadVendedores($periodo,"vende");
       $uno[1]=cantidadVendedores($periodo,"publica");
    }
    if ($mes >= ($periodo+1)) {
       $dos[0]=cantidadVendedores(($periodo+1),"vende");
       $dos[1]=cantidadVendedores(($periodo+1),"publica");
    }
    if ($mes >= ($periodo+2)) {
       $tres[0]=cantidadVendedores(($periodo+2),"vende");
       $tres[1]=cantidadVendedores(($periodo+2),"publica");
    }
    if ($mes >= ($periodo+3)) {
       $cuatro[0]=cantidadVendedores(($periodo+3),"vende");
       $cuatro[1]=cantidadVendedores(($periodo+3),"publica");
    }
    if ($mes >= ($periodo+4)) {
       $cinco[0]=cantidadVendedores(($periodo+4),"vende");
       $cinco[1]=cantidadVendedores(($periodo+4),"publica");
    }
    ?>
    <div id=<?php echo "containerx".$num;?> style="min-width: 310px; height: 400px; margin: 0 auto"></div>

    <script type="text/javascript">
        Highcharts.chart(<?php echo "containerx".$num;?>, {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Cantidad de publicaciones y ventas de todos los vendedores externos por mes'
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
            name: 'Ventas',
            <?php echo "data: [$uno[0], $dos[0], $tres[0], $cuatro[0], $cinco[0]]";?>

        },{
            name: 'Publicaciones',
            <?php echo "data: [$uno[1], $dos[1], $tres[1], $cuatro[1], $cinco[1]]";?>

        }]
    });  
    </script>
<?php }  
?>
