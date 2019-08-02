<?php 
function countVowels($str){
	$d = 0;
	for ($i = 0; $i < strlen($str); $i++)
	{
		if (ord($str[$i]) == 97 || ord($str[$i]) == 101 || ord($str[$i]) == 105 || ord($str[$i]) == 111 || ord($str[$i]) == 117)
		{
			$d++;
		}
	}
	return $d;
}
$str = "vuducthao";
echo "vowels is ".countVowels($str);
?>