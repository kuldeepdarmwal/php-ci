	<?php
	foreach ($arra[0] as $booking) {
		$temp=$booking;
		$temp=explode(",", $temp);
		foreach ($temp as $key=>$booking2) {
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