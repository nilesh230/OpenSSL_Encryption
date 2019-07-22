<?php

// program to print chessboard

echo '<table width="270px" border="1px" >';
  $color1= "";
               $color2= "";
  for($i=1; $i<=10; $i++){
  echo '<tr>';
  
      for($j=1; $j<=10; $j++){
              if($i%2 == 0){
               $color1= "white";
               $color2= "black";
              }else{
               $color1= "black";
               $color2= "white";
              }
              if($j%2 == 0){
              
              echo '<td style="background:'.$color1.'"> </td>';
                            }else{
                            
                            echo '<td style="background:'.$color2.'">  </td>';
                            }
                    
       }
      
  
  echo '</tr>';
    }
  
echo '</table>';


//