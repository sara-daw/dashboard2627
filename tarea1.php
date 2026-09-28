<?php
    
        for($factorial=1,$numero=1;$numero<=$_GET["numero"];$numero++){
            $factorial=$factorial*$numero;
        }
        echo "<p>$factorial</p>";
?>