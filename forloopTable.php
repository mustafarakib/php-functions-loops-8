<?php

echo "<table border ='2'>";

$count = 1;
   for($i=0; $i<=3; $i++){
       echo "<tr>";

           for($k=3; $k>$i; $k--){
               echo "<td>";
           }
           for($j=0; $j<=$i; $count++, $j++){
               echo "<td> $count </td>";
           }

       echo "</tr>";
   }

echo "</table>";
