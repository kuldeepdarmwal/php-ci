<pre>
<?php


	session_start();
	include_once "TableDisplay.php";

	include_once "stringconvert.php";
	$var=$_SERVER['QUERY_STRING'];
	$_SESSION['key']=$var;
	$price=0;
	$arra=[];

	$arra=array(explode("&",str_replace('%2F','/',(str_replace('%2C',',',urldecode(html_entity_decode($_SERVER['QUERY_STRING'])))))));
	include_once "ForLoopDisplay.php";
	echo '<tr>';
	include_once "DisplayTable.php";

echo "</tr>";

?>
		<tr>
		<td colspan="4"><h4 style="color:blue;text-align:center">Total Price</h4></td>
		<?php $_SESSION['price']=$_SESSION['price']+$price?>
		<td><h4 style="color:blue;text-align:center"><?php  echo $price;?></h4></td>
		</tr>
</table>
</div>
</pre>
