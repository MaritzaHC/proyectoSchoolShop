<?php
/*
require_once 'lib/nusoap.php';

$wsdl="http://localhost:26439/ServiceSS.asmx?WSDL";

$client=new nusoap_client($wsdl,true);

$result=$client->call('productosConsultaprincipal',1);

var_dump($result)."</br>";
//*/
/*
require_once 'lib/nusoap.php';

$wsdl="http://localhost:26439/ServiceSS.asmx?WSDL";

$client=new SoapClient($wsdl,1);

$result=$client->productosConsultaprincipal(1)->productosConsultaprincipalResult;

var_dump($result)."</br>";
/*
// /*
*/
require_once 'lib/nusoap.php';

$wsdl="http://servicioss.gearhostpreview.com/ServiceSS.asmx?WSDL";

$client=new soapclient($wsdl);

$result=$client->productosConsultaprincipal(1,1);

//var_dump($result)."</br>";

print json_encode($result->productosConsultaprincipalResult->ProductosModelo[1]->descripcion);
//*/

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
    if ($mes >= 2) {
       $Febrero=5;
       $Febre=6;
    }
    if ($mes >= 3) {
       $Marzo=9;
       $Mar=9;
    }
    if ($mes >= 4) {
       $Abril=21;
       $Abr=23;
    }
    if ($mes >= 5) {
       $Mayo=15;
       $Ma=5;
    }
    if ($mes >= 6) {
       $Junio=4;
       $Jun=6;
    }
    echo "<p><
        <script src=\"https://code.highcharts.com/highcharts.js\"></script>
        <script src=\"https://code.highcharts.com/modules/exporting.js\"></script>

        <div id=\"containerx\" style=\"min-width: 310px; height: 400px; margin: 0 auto\"></div>

        <script type=\"text/javascript\">
            Highcharts.chart('containerx', {
            chart: {
                type: 'column'
            },
            title: {
                text: $titulo;
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
                headerFormat: '<span style=\"font-size:10px\">{point.key}</span><table>',
                pointFormat: '<tr><td style=\"color:{series.color};padding:0\">{series.name}: </td>' +
                    '<td style=\"padding:0\"><b>{point.y:.1f}</b></td></tr>',
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
                data: [$Febrero, $Marzo, $Abril, $Mayo, $Junio]

            },{
                name: 'Compras',
                data: [$Febre, $Mar, $Abr, $Ma, $Jun]

            }]
        });  
        </script>
    ";

?>