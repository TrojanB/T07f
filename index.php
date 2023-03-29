<?php
    $tab = array();

    for($i = 0;$i<7;$i++){
        for($j=0;$j<7;$j++) {
            $tab[$i][$j] = rand(10,99);
            while(in_array($tab[$i][$j], $tab)){
                    $tab[$i][$j] = rand(10,99);
            }
        }
    }

    for($i = 0;$i<7;$i++){
        for($j=0;$j<7;$j++){
            echo " [";
            echo $tab[$i][$j];
            echo "] ";

        }
        echo "<br>";
    }
?>