<?php

$letters = array("A", "B", "C", "D", "E", "F");

$counter = 0;

echo "LOOP\n";

for ($i = 1; $i <= 3; $i++) {

 for ($j = 1; $j <= $i; $j++) {
   
   echo $letters[$counter];
   $counter++;

   if ($j < $i) {
     
     echo " ";
   }
 }

 echo "\n";
}

?>