<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ecommerce</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/plug-ins/f2c75b7247b/
integration/bootstrap/3/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bodyCss.css">
<link rel="stylesheet" type="text/css" href="css/bodyHomepageCss.css">
<link rel="stylesheet" type="text/css" href="css/footerCss.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
<link rel="stylesheet" href="css/Signin.css">
<script lang="javascript">
function ValidateEmail(mail)
{
if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(loginform.email.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}
</script>
<script type="text/javascript">
function myFunction() {
	     var pass1 = document.getElementById("user_password").value;
	     var pass2 = document.getElementById("user_repassword").value;
	     if (pass1 != pass2) {
	         alert("Passwords Do not match");
	         document.getElementById("user_password").value="";
	         document.getElementById("user_repassword").value="";
		         document.getElementById("errror_message").style.color="RED";
		         document.getElementById("errror_message").innerHTML="password not match";
	         return false;
	     }
	 }
	</script>
	
	<script type="text/javascript">
	
	function myFunction2() {
	     alert("from fun2");
		         document.getElementById("errror_message2").style.color="RED";
		         document.getElementById("errror_message2").innerHTML="password not match";
	         
	     }
	 
	 </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js"></script>
<script src="js/myjs.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/ie10-viewport-bug-workaround.js"></script>
<script type="text/javascript" src="js/ie-emulation-modes-warning.js"></script>
<script src="js/ChecboxId.js"></script>
<script src="js/myjs1.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>
<div class="container">
  <br>
   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
		  aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">E-Commerce</a>
		   <?php
		session_start();
		$emailid = $_SESSION['email'];
		if ($emailid) {
		?>
		 <h3 ><font class="message" color="white"> <?php echo  $emailid ?></font></h3>
		<?php
		 ?>
		</h3>
		 <?php
		}
        ?>
        </div>
		<div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">HOME</a></li>
            <li><a href="AboutusCustIncluded.php"> About Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/ecom_header1.jpg" alt="Chania" width="460" height="345">
      </div>
      <div class="item">
        <img src="images/ecom_header2.jpg" alt="Chania" width="460" height="345">
      </div>
      <div class="item">
        <img src="images/ecom_header3.jpg" alt="Flower" width="460" height="345">
      </div>
      <div class="item">
        <img src="images/ecom_header4.jpg" alt="Flower" width="460" height="345">
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<div class="header">
<form method="POST">
  <button type="button"  class="btn btn-default">Default</button>
  <button type="button" id="button_home"class="btn btn-primary">Home</button>
  <button type="button" id="button_login" class="btn btn-success">Login</button>
  <button type="button" id="button_signup"  class="btn btn-info">Sign Up</button>
  <button type="button" id="button_logout" class="btn btn-danger">Logout</button>
</form>
</div>
</div>
