<?php 
$string = "Faisal Khairudin";
foreach (count_chars($string, 1) as $i => $val)
{
   echo "\"" , chr($i) , "\":  $val <br>";
}