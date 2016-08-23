<?php
function stringConvert($arra)
{
//$arra=array(explode("&",str_replace('%2F','/',(str_replace('%2C',',',urldecode(html_entity_decode($_SESSION['key'])))))));
	$array1 = $arra[0];
	foreach ($array1 as $key =>$value) {
		if ($key == 0) {
			$array1[$key]= substr($value,18,-18);
		} else {
			$array1[$key] = substr($value,14,-14);
		}
	}
}	

function stringConvert1($arra,$price)
{

stringConvert($arra);
echo '<tr>';
foreach ($arra[0] as $booking) {
$temp=$booking;
$temp=explode(",", $temp);
    foreach ($temp as $key=>$booking2) {
		if ($key == 0) {
		#checking
		}
		if ($key == 1 or $key==2 or $key==3) {
			echo "<td>".$booking2."</td>";
		}
		 if ($key == 4) {
			echo "<td>";
			echo '<img src="'.$booking2.'" alt="images" >';
			echo "</td>";
		}
		if ($key==5) {
			echo "<td>".$booking2."</td>";
			echo '<tr>';
			echo '</tr>';
		}
		if ($key==2) {
				$price+=$booking2;
			}
	}
}
}
?>