<?php
include_once ("Helper.php");
echo $_POST['operation'];
/**
*Product class consist of all CRUD operations of a products
*/
class Product {
  /**
  *Sample class variables
  *
  *@access private
  *
  *@var string
  */
	private $helper;
	public function __construct($helper) {
	echo "In constructor";
    $this->helper = $helper;
    }
	public function addProduct($tablename, $user_fields, $user_values) {
    $this->helper->insert($tablename, $user_fields, $user_values);
    echo 'success';
    header("location:ProductViewPage.php");
	}
    public function deleteProduct($tablename, $condition) {
    $this->helper->delete($tablename, $condition);
    header("location:ProductViewPage.php");
	}
    public function updateProduct($tablename, $field, $condition) {
    $this->helper->update($tablename, $field, $condition);
    header("location:ProductViewPage.php");
	}
    public function viewProduct($product_list, $table) {
    $helper->read_all($product_list, $table);
    }
	public function viewSingleProduct($product_list, $table, $condition) {
    $helper->read_record($product_list, $table, $condition);
	}
}
    /************ For Inserting Record ***********************/
	/**
	*Inserting records into database
	*
	*@param string $product_name
	*
	*@param string $price
	*
	*@param string $image_name
	*
	*@param string $description
	*
	*@name file
	*/
    $product=new Product($helper);
    $product_name=$_REQUEST['product_name'];
    $price=$_REQUEST['price'];
	$image_name=$_REQUEST['image_name'];
	$description=$_REQUEST['description'];
    if ($_FILES["image_path"]["error"] > 0) {
    echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
    echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
    } else {
    $uploaddir="images/";
    move_uploaded_file($_FILES["image_path"]["tmp_name"], "$uploaddir" . $_FILES["image_path"]["name"]);
    echo"<font size = '5'><font color=\"#0CF44A\">SAVED<br>";
    }
    $file="$uploaddir".$_FILES["image_path"]["name"];
    /************ For deleting Record ***********************/
	/**
	*Deleting values into database
	*
	*@param string $product_id
	*/
	$product_id=$_REQUEST['del'];
	/****************************For Update Record***********************/
	/**
	*Inserting records into database
	*
	*@param string $product_id1
	*
	*@param string $price_name1
	*
	*@param string $image_name1
	*
	*@param string $description1
	*
	*@name file1
	*/
	$product_id1=$_REQUEST['product_id'];
	$product_name1=$_REQUEST['product_name'];
	$price1=$_REQUEST['price'];
	$image_name1=$_REQUEST['image_name'];
	$description1=$_REQUEST['description'];
	if ($_FILES["image_path"]["error"] > 0) {
    echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
    echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
    } else {
	$uploaddir="images/";
    move_uploaded_file($_FILES["image_path"]["tmp_name"], "$uploaddir" . $_FILES["image_path"]["name"]);
    echo"<font size = '5'><font color=\"#0CF44A\">SAVED<br>";
	}
    $file1="$uploaddir".$_FILES["image_path"]["name"];
switch ($_REQUEST['operation']) {
case "add":
	$product->addProduct("product_details", "product_name,price,image_name,image_path,description",
	"'$product_name','$price','$image_name','$file','$description'");
	break;
case "update":
	$product->updateProduct("product_details", "product_name='$product_name1',price='$price1',image_name='$image_name1',
	image_path='$file1',description='$description1'","product_id='$product_id1'");
	break;
case "delete_rec":
	$product->deleteProduct("product_details", "product_id='$product_id'");
    break;
case "view":
    $product->viewProduct($product_list, $table);
    break;
case "view_single":
    $product->viewSingleProduct($product_list, $table, $condition);
    break;
default:
    echo "<H3 color='red'>Invalid Option Please Try again!</h3>";
}
