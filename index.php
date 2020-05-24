<?php
    for($liczba = 1; $liczba <= 100; $liczba++){
        echo $liczba;
        if($liczba % 3 == 0 && $liczba % 5 == 0){
            echo " FizzBuzz";
        }
        elseif($liczba % 3 == 0){
            echo " Fizz";
        }
        elseif($liczba % 5 == 0){
            echo " Buzz";
        }
        echo "</br>";
    }
?>