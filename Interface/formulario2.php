<?php

if(isset($_GET["profesor"])){
    $profesores=$_GET["profesor"];
}
if(isset($_GET["clase"])){
    $clase=$_GET["clase"];
}
if(isset($clase)){
    echo 'clase: '.$clase;
    echo '<br/>';
}
if(isset($profesores)){
    echo 'profesores de la clase: ';
    foreach($profesores as $profesor){
        echo $profesor.' ';
    }
        
}


?>
