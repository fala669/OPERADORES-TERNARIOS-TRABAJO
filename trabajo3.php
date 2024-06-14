<?php
 echo"DIMENSIONES DEL TERRENO\n";
 $Largo = readline();

 $Ancho = readline();
  
 $terreno = (($Largo >= 1000) && ($Ancho >= 1000)) ? "\nES ADECUADO PARA CULTIVOS EXTENSIVOS" : "ES ADECUADO PARA CULTIVOS DE JARDIN O HUERTO\n";
 echo $terreno;














?>