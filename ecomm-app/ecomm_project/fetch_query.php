<?php
include_once "Helper.php";
$product_id=$_REQUEST['update'];
?>
<?php
include_once "html/adminHeader.html";
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
<form style="align:center" action="Product.php" enctype="multipart/form-data" method="post">
<div>
<pre>
<?php
 $product_id=$_REQUEST['update'];
 $result=$helper->read_record("*", "product_details", "product_id='$product_id'");
 if (is_array($result)) {
 foreach ($result as $row) {
?>
<input type="hidden" name="product_id" id="pn"  value="<?php echo $row['product_id'];?>" required /></br>
<font color="#3399FF" face="Bedrock" size="03"><b>Product Name: </b></font><input type="text" name="product_name" id="pn"  value="<?php echo $row['product_name'];?>" required/></br>
<font color="#3399FF" face="Bedrock" size="03"><b>Price:  </b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price" id="price"  value="<?php  echo $row['price']; ?>" required/></br>
<font color="#3399FF" face="Bedrock" size="03"><b>Image Name: </b></font>&nbsp;&nbsp;<input type="text" name="image_name" id="in"  value="<?php echo  $row['image_name'];?>" required/></br>
<font color="#3399FF" face="Bedrock" size="03"><b>Image Path: </b></font></br>&nbsp;&nbsp;<input type="file" class="btn btn-info active" name="image_path"  value="<?php echo $row['image_path'];?>" required/>
<font color="#3399FF"face="Bedrock"  size="03"><b><p>Description :</p></b></font>

<div><textarea name="description" cols="38" rows="4" required><?php echo $row['description'];?></textarea></div>

<?php
}
}
?>

<input type="submit" class="btn btn-primary" value="UPDATE" /> <input type="hidden" class="btn btn-primary" name="operation" value="update"/> <button type="button" class="btn btn-primary" onclick="newDoc()">Cancel</button>
</pre>
</div>
</form>
<?php
include_once "html/adminNavigation.html";
?>
