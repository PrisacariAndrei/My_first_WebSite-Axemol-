<?php
$source=file_get_contents("rates.txt");

function get_num($company,$filial,$currency,$mode){
	global $source;
	$num=0;
	$companyarray=explode("$$$",$source);
	foreach($companyarray as $val){
		if(stristr($val,$company)){
			$filialarray=explode("%",$val);
			foreach($filialarray as $val2){
				if(stristr($val2,$filial)){
					$currencyarray=explode("#",$val2);
					foreach($currencyarray as $val3){
						if(stristr($val3,$currency)){
							$array=explode("-",$val3);
							if($mode=="buy")$num=$array[1];
							if($mode=="sell")$num=$array[2];										
						}										
					}
				}										
			}
		}
	}
	return $num;
}

?>