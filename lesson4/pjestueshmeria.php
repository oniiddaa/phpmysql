<?php
    //Krijo nje funksion me parameter ashtu qe nese parametri plotpjesetohet me 2 te shfaqet vlera e var dhe te shfaqet qe plotpjesetohet me 2

    
    function psh($x){
        if(($x % 2) == 0){
            return "$x is fully divisible by 2";
        }else{
            return "$x is not fully dividable by 2";
        }
    }

    print_r(psh(4)."<br>");
    print_r(psh(5)."<br>");
    print_r(psh(6)."<br>");
    print_r(psh(7)."<br>");

?>