<?php
	$array1 = $arra[0];
	foreach ($array1 as $key =>$value) {
		if($key == 0){
			$array1[$key]= substr($value,18,-18);
		} else {
			$array1[$key] = substr($value,14,-14);
		}
		
	}