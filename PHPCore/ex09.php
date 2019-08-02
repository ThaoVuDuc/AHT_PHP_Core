<?php 
function exchange_with($myarr, $otherarr){
	for($i = 0; $i < sizeof($myarr); $i++)
	{
		$t = $myarr[$i];
		$myarr[$i] = $otherarr;
		$otherarr = $t;
	}
	for($i = 0; $i < sizeof($myarr); $i++)
	{
		
	}
	var_dump($myarr);
	var_dump($otherarr);
}
$myarr = ['a', 'b', 'c'];
$otherarr = [1, 2, 3];
exchange_with($myarr, $otherarr);
?>