<?php
    $dias = array(0=>"Hora",1=>"L",2=>"M",3=>"X",4=>"J",5=>"V");
    $primera= array(0=>"8:15 - 9:10",1=>"IPP2",2=>"DWENC",3=>"IPP2",4=>"DWESV",5=>"OPT2I");
    $segunda= array(0=>"9:10 - 10:05",1=>"DWESV",2=>"DWENC",3=>"DWENC",4=>"DWESV",5=>"OPT2A");
    $tercera= array(0=>"10:05 - 11:00",1=>"IPP2",2=>"DWENC",3=>"IPP2",4=>"DWESV",5=>"OPT2I");
    $cuarta= array(0=>"11:30 - 12:25",1=>"PIMOD",2=>"DWESV",3=>"DWESV",4=>"SASP",5=>"DWESV");
    $quinta= array(0=>"12:25 - 13:20",1=>"DEAPW",2=>"PIMOD",3=>"DEAPW",4=>"OPT 1",5=>"DWESV");
    $sexta= array(0=>"13:20 - 14:15",1=>"DWENC",2=>"DEAPW",3=>"DEAPW",4=>"IPP2",5=>"TUTO");
    $septima= array(0=>"14:15 - 15:00",1=>"DWENC",2=>"",3=>"",4=>"",5=>"");

    $horario = array(0=>$dias,1=>$primera,2=>$segunda,3=>$tercera,4=>$cuarta,5=>$quinta,6=>$sexta,7=>$septima);

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Horario 2DAW</title>
    <link rel="stylesheet" href="horario.css">
</head>
<body>
    <header>
        <h1>Horario 2DAW</h1>
        <p>2º Desarrollo de Aplicaciones Web</p>
    </header>
    <main>
        <section class="horario">
            <h2>Horario semanal</h2>
            <table>
                <?php
                    // Recorremos el array horario; cada elemento representa un día y sus asignaturas.
                    /*foreach($horario as $horas){
                        echo '<tr>';

                        // Recorremos las horas y asignaturas de cada día para crear las celdas de la tabla.
                        foreach($horas as $hora => $asignatura){
                            echo '<td>'.$asignatura.'</td>';
                        }

                        echo '</tr>';
                    }*/
                    for($i=0;$i<8;$i++){
                        echo '<tr>';
                        for($j=0;$j<count($dias);$j++){
                            echo '<td>'.$horario[$i][$j].'</td>';
                        } 
                        echo '</tr>';
                    }
                ?>
            </table>
        </section>
        <section class="informacion">
            <h2>Profesores</h2>
            <ul>
                <li>ARL — Álvarez Recio, Luis Miguel</li>
                <li>GTE — González Trives, Ernesto</li>
                <li>VAS — Vázquez Aguilar, Santiago</li>
                <li>DLA — Domínguez Lebrato, Alberto</li>
                <li>MDI — Muñoz Domínguez, Isabel</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>2DAW — 2º Desarrollo de Aplicaciones Web</p>
    </footer>
</body>
</html>