<?php

include('/lib/nusoap.php');

$cliente = new nusoap_client('http://webservice.correios.com.br/service/rastro/Rastro.wsdl');

$parametros = array ('usuario'=>'ECT',
                     'senha'=>'SRO',
                     'tipo'=>'L',
                     'resultado'=>'T',
                     'lingua'=>'101',
                     'objetos'=>'SL947132131BR'
                    );
$resultado = $cliente->call('rastro', $parametros);

print_r($resultado);
?>
