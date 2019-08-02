<?php 
function rand1($arr){
	$str = "";
	$rand_key = array_rand($arr, 3);
	foreach ($rand_key as $value) {
		$str .= (string)$arr[$value];
	}
	return $str;
}
function rand2($arr){
	$str = "";
	$rand_key = array_rand($arr, 4);
	foreach ($rand_key as $value) {
		$str .= (string)$arr[$value];
	}
	return $str;
}

function createPhoneNumber($arr)
{
    echo "(".rand1($arr).") ".rand1($arr)."-".rand2($arr);
}

$arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]; 
createPhoneNumber($arr);

?>
