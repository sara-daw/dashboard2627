
<!DOCTYPE HTML>
</html>
    <head>
    </head>
    <body>
        <table>
            <tr>
                <th>
                    <p>Nº</p>
                </th>
                <th>
                    <p>Factorial</p>
                </th>
            </tr>
            <?php
                $factoriales=array();
                for($factorial=1,$numero=1;$numero<11;$numero++){
                    $factorial=$factorial*$numero;
                    $factoriales[$numero-1]=$factorial;
                    echo '<tr>
                        <td>
                            <p>'.$numero.'</p>
                        </td>
                        <td>
                            <p>'.$factoriales[$numero-1].'</p>
                        </td>
                            '.foreach($factoriales as $numero => $factorial){
                                echo $numero .'-';
                                echo $factorial;
                                echo '<br/>';
                            }.'

                    </tr>';
                }
            ?>
        </table>
    </body>
</html>