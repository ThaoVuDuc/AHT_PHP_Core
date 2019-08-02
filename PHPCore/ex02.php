<?php 
function LetterChanges($str){
    for ($i = 0; $i < strlen($str); $i++)
	{
	    if (ord($str[$i]) >=65 && ord($str[$i]) < 90 || ord($str[$i]) >= 97 && ord($str[$i]) < 122)
		{
	    	$str[$i] = chr(ord($str[$i]) + 1);
		}
	}
	for($i = 0; $i < strlen($str); $i++)
	{
		if(ord($str[$i]) == 90)
		{
			$str[$i] = chr(65);
		}
		if(ord($str[$i]) == 122)
		{
			$str[$i] = chr(97);
		}
	}
	for ($i = 0; $i < strlen($str); $i++)
	{
		if (ord($str[$i]) == 111 || ord($str[$i]) == 97 || ord($str[$i]) == 105 || ord($str[$i]) == 101 || ord($str[$i]) == 117)
	    {
	    	$str[$i] = strtoupper($str[$i]);
	    }
	}
	return $str;
}
	$str = 'fun times!';
	echo LetterChanges($str);
 ?>