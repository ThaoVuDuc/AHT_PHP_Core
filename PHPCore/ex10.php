<?php 
function reverseVowels($str){
	for ($i = 0; $i < strlen($str); $i++)
	{
		if(ord($str[$i]) == 97 || ord($str[$i]) == 101 || ord($str[$i]) == 105 || ord($str[$i]) == 111 || ord($str[$i]) == 117)
		{
			for ($j = strlen($str); $j > $i; $j--)
			{
				if(ord($str[$j]) == 97 || ord($str[$j]) == 101 || ord($str[$j]) == 105 || ord($str[$j]) == 111 || ord($str[$j]) == 117)
				{
					$tmp = $str[$i];
					$str[$i] = $str[$j];
					$str[$j] = $tmp;
					break;
				}
			}
		}
		
	}
	return $str;
}
$str = "Tomatoes";
echo reverseVowels($str);
?>
