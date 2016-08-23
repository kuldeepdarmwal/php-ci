<?php
include_once "html/BodyHomeHtml.html";
include_once "Helper.php";
echo ' <div id="body"> ' ;

$helperObj=new Helper("ecomm");
$fields="'product_id','product_name','price','image_name','image_path','description'";
$resultSet=$helperObj->read_all("*", "product_details");

if (is_array($resultSet)) {
	echo '<form method="POST">';
	echo '<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%"> ';
?>

    <thead>
        <tr>
            <th width="5%" >No.</th>
            <th width="35%">Image</th>
            <th width="10%">Price</th>
			<th width="15%">Product</th>
            <th width="30%">Description</th>
            <th width="5">Select</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>No.</th>
            <th>Image</th>
            <th>Price</th>
			<th>Product</th>
            <th>Description</th>
            <th>Select</th>
        </tr>
    </tfoot>

<?php
echo ' <tbody>';
?>

<?php
	$count=1;
	foreach ($resultSet as $row) {
?>
	<tr>
		<td width="60"><b><?=$count++ ?></b></td>
        <td width="30" ><img src='<?=$row["image_path"]?>' width=150px height=150px></td>
		<!-- columns can have both text and images -->
		<td width="30" ><?=$row['price'] ?></td>
		<td width="60" ><b><?=$row['product_name'] ?></b></td>
		<td width="120" ><?=$row['description'] ?></td>
<?php
	echo ' <td width="10"><input type="checkbox" id="'.$row['product_id'].'"class="items" name="cartarr[]" value="'.implode(",", $row).'"></td> ';
	echo '<input type="hidden" id="'.$row['product_id'].'" value="'.implode(",", $row).'" />';
	echo ' </tr> ';
	}
	echo '</tbody>';
	echo ' </table> ';
	echo '<center><button type="button" id="submitCart" class="btn btn-info" name="cartarr" data-toggle="modal" data-target="#myCart">Add To Cart</button></center>';
	echo '</form>';	
}
?>
<div class="modal fade" id="myCart" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog" style="width:70%">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" 
               aria-hidden="true">[Close]×
            </button>
            <h4 class="modal-title" id="myModalLabel">
               Your Cart
            </h4>
         </div>
         <div class="modal-body" id="cartdisp">
         </div>
         <div class="modal-footer">
            <form action="Summary.php" method="POST">
<input type="submit" class="btn btn-info" value="Confirm Order"/>&nbsp;<input type="button" value="Cancel"
class="btn btn-info" id="cancel_addtoCart"/></form>
         </div>
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div>
