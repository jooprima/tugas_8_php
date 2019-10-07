<?php


    for ($k=0; $k < 2; $k++) {
      for ($j=0; $j < 9; $j--) {
        for( $a=10;$a>0;$a--){
          for($i=1; $i<=$a; $i++){
            echo "_";
            }
            for($a1=10;$a1>$a;$a1--){
              echo"x";
            }
            for($a2=10;$a2>$a;$a2--){
              echo"x";
            }
            echo"<br>";
          }

          for($b=0; $b<=10;$b++){
            for($j=1;$j<=$b;$j++){
              echo"_";
            }
            for($b1=10; $b1>$b;$b1--){
              echo"x";
            }
            for($b2=10; $b2>$b;$b2--){
              echo"x";
            }
            echo"<br>";
          }
      }
    }




?>
