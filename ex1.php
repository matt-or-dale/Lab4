<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<th>" . "" . "</th>";
for($k = 1; $k<=100; ++$k){
  echo "<th>";
  echo $k;
  echo "</th>";
}

 for($i = 1; $i<=100; ++$i){
   echo "<tr>";
   echo "<th>". $i . "</th>";
   for($j = 1; $j<=100; ++$j){
     echo "<td align='center'>" . $i*$j . "</td>";
   }
   echo "</tr>";
 }
 ?>
