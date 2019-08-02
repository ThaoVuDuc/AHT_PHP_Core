<?php 
	function stripUnicode($str){
	  if(!$str) return false;
	   $unicode = array(
	      'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
	      'd'=>'đ',
	      'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
	      'i'=>'í|ì|ỉ|ĩ|ị',
	      'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
	      'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
	      'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
	      ' '=> '\+|\*|\/|\&|\!| |\^|\%|\$|\#|\@',
	   );
	foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str);
	return $str;
	}
	function LongestWord($sen){
		$sen = stripUnicode($sen);
		$sen = explode(" ", $sen);
		//var_dump($sen);
		$max = strlen($sen[0]);
		for($i = 0; $i < sizeof($sen); $i++)
		{
			if(strlen($sen[$i]) >= $max)
			{
				$max = strlen($sen[$i]);
			}
		}
		$result = "";
		for($i = 0; $i < sizeof($sen); $i++)
		{
			if(strlen($sen[$i]) == $max)
			{
				$result = $sen[$i];
				break;
			}
		}
		echo $result;

	}
	$str = "i love dogs";
	LongestWord($str);
 ?>