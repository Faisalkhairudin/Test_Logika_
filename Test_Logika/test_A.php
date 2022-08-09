<?php 
$arr = array(12,9,30,"A","M",99,82,"J","N","B");
sort($arr);

$acak = count($arr);
for ($x=0; $x < $acak; $x++) {
	echo $arr[$x];
	echo "<br>";
}
?>