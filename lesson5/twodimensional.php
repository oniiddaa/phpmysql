<?php

    $dogs = array(
        array("Husky","Siberia",20),
        array("Bulldog","England",20),
        array("Pitbull","USA",20),
    );

    // echo $dogs[0][0] . ":Origin" . $dogs[0][1] .",Life Span:". $dogs[0][2] . ".<br>";

    // echo $dogs[1][0] . ":Origin" . $dogs[1][1] .",Life Span:". $dogs[1][2] . ".<br>";

    // echo $dogs[2][0] . ":Origin" . $dogs[2][1] .",Life Span:". $dogs[2][2] . ".<br>";

    for($row = 0;$row < 3;$row++){
        echo"<p><b>Row number $row</b></p>";
        echo"<ul>";
        for ($col = 0;$col < 3;$col++){
        echo "<li>".$dogs[$row][$col]."</li>";
        } 
        echo "</ul>";
    }

    $arrays = array(
        array(1,2,3),//0
        array(1,2,3),//1
        array(1,2,3),//2
    );

    for($i = 1;$i < 4;$i++){
        for($j = 0;$j < 4;$j++){
            echo "Array: $i Element: $j <br>";
        }
    }

    
?>