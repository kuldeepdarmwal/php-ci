<?php 
include_once "html/adminHeader.html";
?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
<h2>
<form style="align:center" action="Product.php" enctype="multipart/form-data" method="post">
<div>
<pre>
<font color="GoldenRod"  face="Bedrock" size="03">
<b>Product Name : </b>&nbsp;&nbsp;<input type="text" name="product_name" id="pn" placeholder="Enter Product Name" autofocus required/></br>
<b>Price       : </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="price" id="price" placeholder="Enter Price" required/></br>
<b>Image Name  : </b>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="image_name" id="in" placeholder="Enter Image Name" required/></br>
<b>Image Path  : </b></br>&nbsp;&nbsp;<input type="file" class="btn btn-warning" name="image_path" required/>
<!-- <b>Description : </b><textarea name="description" rows="10" cols="25" placeholder="Enter Description" required></textarea></br>-->
<b><p>Description :</p></b>
<div><textarea name="description" cols="38" rows="4" placeholder="Enter Description" required></textarea></div>
</font>
<input type="submit" class="btn btn-warning" value="Add/Update" /> <button type="button" class="btn btn-warning" onclick="newDoc()">Cancel</button>
<input type="hidden" name="operation" value="add"/>
</pre>
</div>
</form>
</h2>
</div>

<?php 
include_once "html/adminNavigation.html";
?>
