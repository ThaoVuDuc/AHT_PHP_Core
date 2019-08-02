<?php 
function commas($num){
	$num = number_format($num, 3, '.', ',');
	echo $num;
}
$num = -1000000.123;
commas($num);
?>