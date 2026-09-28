<?php
    include 'controller.php';
    //mostrar algo
    echo '<h1>Hola Mundo</h1>';

    //concatenar y variables
    $variable = 'Hola Mundo';
    echo '<h1>' . $variable . '</h1>';

    //las comillas doble detectan las variables pero las simples no
    echo "<h2>$variable hola mundo</h2>";

    //en un html se puede abrir y cerrar tantas veces como se quiera php


    
?>