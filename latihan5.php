<?php
function maximum($x, $y, $z)
{
 $max = $x; 
 if ($y> $max) { 
  $max = $y;
 } 
 if ($z > $max) { 
  $max = $z;
 } 

 echo "Nilai terbesar adalah ".$max;
}
maximum(18,10,100);
?>