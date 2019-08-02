<?php 
function maxNumber($str){
	$arr = [];
	$num = "";
	for ($i = 0; $i < strlen($str); $i++)
	{
		if (ord($str[$i]) >= 48 && ord($str[$i]) <= 57)	
		{
			$num .= $str[$i];
			while (ord($str[$i + 1]) >= 48 && ord($str[$i + 1]) <= 57) {
				$num .= $str[$i + 1];
				$i++;
			}
			$arr [] = $num;
			$num = "";
		}
	}
	$max = 0;
	for($i = 0; $i < sizeof($arr); $i++)
	{
		if($arr[$i] >= $max)
		$max = $arr[$i];
	}
	echo "max is ".$max;
}
$str = "gh12cdy695m1";
maxNumber($str);
?>