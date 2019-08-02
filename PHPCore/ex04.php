<?php 
function Backspaces($str){
	for($i = 0; $i < strlen($str); $i++)
	{
		if($str[$i] == "#")
		{
			unset($str[$i - 1]);
		}
	}
	return $str;
}

$str = "abc#d##c";
echo Backspaces($str);

?>