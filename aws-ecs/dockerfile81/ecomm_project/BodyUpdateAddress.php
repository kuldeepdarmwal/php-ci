<?php
include_once ("Helper.php");
session_start();
$email_id=$_SESSION['email'];
 $result=$helper->read_record("*","user_details","user_id in(select user_id from user where email_id='$email_id' )");
 if(is_array($result)){
 session_start();
 foreach($result as $row){
?>

<form  action="UpdateAddressDetails.php" method="POST" style="text-align: center;font:xx-large;" theme="simple">
<pre>
<table align="center">
<tr>
<td>
<b>Full Name : </b>
</td>
<td>
<input type="text" name="UserName" id="FullName" value="<?php echo $row['user_name'];?>">
</td>
</tr>

<tr>
<td>
	<b>Mobile No.: </b>
	</td>
<td>
	<input type="text" name="Mobile" id="Mobile" value="<?php echo $row['mobile'];?>">
	</td>
	<td></td>
</tr>
<tr>
<td>
	<b>Address Details :</b>
	</td>
<td><input type="text" name="Address" rows="10" cols="30" id="Address" value="<?php echo $row['address'];?>" style="height:50px;width:330px">
</td>
<td></td>
</tr>
<tr>
<td>
	<b>City : </b>
	</td>
<td><input type="text" name="City" id="City" value="<?php echo $row['city'];?>" >
</td>
<td></td>
</tr>
<tr>
<td>





	<b>Pin Code : </b>
	</td>
<td>
	<input type="number" name="PinCode" id="PinCode" value="<?php echo $row['zip'];?>">
	</td>
	<td></td>
</tr>
	</table>
	</pre>
	<input type="submit" class="btn btn-info" value="add detail">
</form>
<?php
}
} else {
include_once "html/Address.html";
}
?>