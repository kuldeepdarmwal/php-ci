<?php
session_start();
/**
 * A Generic class which defines two methods for checking login credentials and Items in the cart
 */
class GenericClass {
   	/**
    *Function returns nothing, fetches email and password record from database and checks user.
    *@param string $email
    *@param string $pass
	*@var object
    *@name $field
    *@name $table
    */
	public function checFunLogin($email, $pass) {
		/**
        *@var array
        */
		$obj=new Helper("ecomm");
		$field="user_id, email_id, password";
		$table="user";
		$condition=" email_id='$email' AND password='$pass' AND is_active='1' ";
		$result=$obj->read_record($field, $table, $condition);
		if (is_array($result)) {
		foreach ($result as $row) {
			$_SESSION['user'] = $row['user_id'];
			$_SESSION['email'] =$row['email_id'];
			$_SESSION['pass'] =$row['password'];
			if (isset($_SESSION['key'])) {
			header("Location: OrderSummaryPageIncluded.php");
			} else {
				header("Location: index.php");
			}
		}
		} else {
			echo "Invalid Login Credentials.";
			header("Location: LoginPageIncluded.php");
		}
    }
	/**
    *Function returns nothing ,checks whether user has added anything in cart or not.
    *@param string $email
    *@param string $pass
	*@var object
    *@name $field
    *@name $table
    */
	public function checkFunctionSummery($email, $pass) {
		$obj=new Helper("ecomm");
		if (isset($email) && isset($pass)) {
		$field="user_id";
		$table="user";
		$condition=" email_id='$email' AND password='$pass' ";
		$result=$obj->read_record($field, $table, $condition);
				if (is_array($result)) {
							foreach ($result as $row) {
								if ($_SESSION['user'] == $row['user_id']) {
									header("Location: OrderSummaryPageIncluded.php");
}
}
} else {
//If the login credentials doesn't match, he will be shown with an error message.
echo "Invalid Login Credentials.";
header("Location: LoginPageIncluded.php");
}
}else {
//If the login credentials doesn't match, he will be shown with an error message.
echo "Invalid Login Credentials.";
header("Location: LoginPageIncluded.php");
}
}
}
