<?php
session_start();
	include_once "Helper.php";
	include_once "Sever_User_Email_Validation.php";
	$password=$_POST["user_password"];
	$emailId=$_POST["user_emailid"];
	$obj=new Helper("ecomm");
	$val="'$emailId', '$password'";
	$condition1=" email_id='$emailId'";
	$field1="email_id";
	$tableName="user";
	$obj1=new Sever_User_Email_Validation("ecomm");
	$flag=$obj1->email_Exitence($field1, $tableName, $condition1);
    if ($flag) {
   ?>
   <script type="text/javascript">
	myFunction2();
	</script>
	<?php	
	header("Location: SignupPageincluded.php");
	} else {
	$field="email_id,password";
	$obj->insert($tableName, $field, $val);
	echo "data inserted successfully";
	$email=	$_POST['user_emailid'];
	$pass=	$_POST['user_password'];
	if (isset($email) && isset($pass)) {
	$field="user_id";
	$table="user";
    $condition=" email_id='$email' AND password='$pass' ";
	$result=$obj->read_record($field, $table, $condition);
	if (is_array($result)) {
    foreach ($result as $row) {
    $_SESSION['user'] =$row['user_id']; {
	header("Location: LoginPageIncluded.php");
	}
    }
	}
}
}
?>
