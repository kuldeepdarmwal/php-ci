<pre>
<div id="body" >
	<fieldset>
	<legend>Order summery page</legend>

<?php
session_start();
include_once "TableDisplay.php";
include_once "Helper.php";
include_once "stringconvert.php";
$var=$_SESSION['user'];
$obj = new Helper("ecomm");
$field="user_id,mobile,address,city,zip";
$table="user_details";
$condition="user_id='".$var."'";
$record=$obj->read_record($field, $table, $condition);

$arra=[];
$price=$_SESSION['price'];
session_start();
$arra=array(explode("&",str_replace('%2F','/',(str_replace('%2C',',',urldecode(html_entity_decode($_SESSION['key'])))))));
<<<<<<< HEAD
include_once "ForLoopDisplay.php";
echo '<tr>';
include "DisplayTable.php";
=======
 // Its conversion of querystring data into Array Format

stringConvert1($arra,$price);
>>>>>>> 40952a36d8476baf5dcd0ff0f0fe27e738542016
echo "</tr>";
?>
<tr>
		<td colspan="4"><h4 style="color:blue;text-align:center">Total Price</h4></td>
		<td><h4 style="color:blue;text-align:center"><?php echo $price ?></h4></td>
		</tr>
</table>
<h3>Address details :</h3>
<table border="3">
<tr>
<td>&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;<?php echo $_SESSION['email'];?>&nbsp;&nbsp;&nbsp;</td>
</tr>
<?php
foreach ($record as $key ) {
    $_SESSION["user_details_id"]= $key['user_id'];
  foreach ($key as $subElement=>$val) {
	?>
		<tr>
		<td>&nbsp;&nbsp;&nbsp;<?php echo "$subElement";?>&nbsp;&nbsp;&nbsp;</td>
        <td>&nbsp;&nbsp;&nbsp;<?php echo "$val";?>&nbsp;&nbsp;&nbsp;</td>
		</tr>
		<?php
    }
}
?>
</table>
<script type="text/javascript" src="js/updateAddress.js"></script>
<button type="button" name="btn_submit" class="btn btn-info" value="Address" data-toggle="modal" data-target="#myAddress" >Address</button>
<button type="button" name="btn_submit"  class="btn btn-info" value="Confirm" >Confirm</button>
<button type="button" name="btn_submit" class="btn btn-info"  value="Cancel" >Cancel</button>
	</fieldset>
</div>
</pre>
<div class="modal fade" id="myAddress" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog" style="width:70%">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" 
               aria-hidden="true">[Close]×
            </button>
            <h4 class="modal-title" id="myModalLabel">
              Check/Update Details
            </h4>
         </div>
         <div class="modal-body" id="addressdisp">
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div>
