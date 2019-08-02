<?php 
function mostPopularChar($str){
	//tìm max
	$maxIndex = 0;
	$maxStr = "";
	$d = 0;
	for ($i = 0; $i < strlen($str); $i++)
	{
		$max = 0;
		if(substr_count($str, $str[$i]) >= substr_count($str, $max))
		{
			$max = substr_count($str, $str[$i]);

			$maxIndex = $i;
			$maxStr = $str[$i];
		}
	}
	for ($i = 0; $i < $maxIndex; $i++)
	{
		if(substr_count($str, $str[$i]) == substr_count($str, $str[$maxIndex]) && $str[$i] != $maxStr)
		{
			$d = 0;
		}else if(substr_count($str, $str[$i]) == substr_count($str, $str[$maxIndex]) && $str[$i] == $maxStr){
			$d = 1;
		}
	}
	if($d == 0)
	{
		echo "không có ký tự phổ biến !";
	}else{
		echo $str[$maxIndex];
	}
}
$str = "ababbab";
mostPopularChar($str);
?>