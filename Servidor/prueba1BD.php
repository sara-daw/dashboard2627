<?php
    $mysqli = new mysqli("127.0.0.1","root","","prueba1");
    function primeraFila($mysqli){
        $resultado = $mysqli->query("SELECT * FROM asignatura");
        $fila = $resultado->fetch_array();
        /*foreach ($fila as $registro) {
            echo $registro.' ';
        }*/
        for($i=0;i<count($fila);$i++){
            echo fila[i].' ';
        }
    }
    primeraFila($mysqli);
    echo '<br/>';
    function numeroFilas($mysqli){
        $resultado = $mysqli->query("SELECT * FROM asignatura");
        $fila = $resultado->num_rows();
        echo $fila;
    }
    numeroFilas($mysqli);
?>