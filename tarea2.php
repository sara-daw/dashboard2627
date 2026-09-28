<?php
    $factoriales=array();
    for($factorial=1,$numero=1;$numero<11;$numero++){
    $factorial=$factorial*$numero;
    $factoriales[$numero-1]=$factorial;
    }
    foreach($factoriales as $factorial){
        echo $factorial;
        echo '<br/>';
    }
?>