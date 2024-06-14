<?php
echo "DIGITE LA ESTACION\n";

$digitar = readline();
$estacion = "invierno";

$mensaje = ($digitar == $estacion) ? "Debe utilizar la siembra en almácigo" : "Se puede realizar la siembra directa";

echo $mensaje;

?>


















