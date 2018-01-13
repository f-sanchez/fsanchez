<?php 
include 'database.php';
/*******************/
session_start();	
$_SESSION['fail'] = 0;
/*******************/

if (isset($_POST['register'])){
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$password = $_POST['password'];
	if(isset($_POST['gender'])){
		$gender = $_POST['gender'];
	}

	$mysql->query("INSERT INTO atm (lname, fname, gender, password) VALUES ('$lname', '$fname','$gender', '$password')");
	
	header('location: showid.php');
	exit();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ATM</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
		<div class="row header">
            <div class="col col-md-offset-2 col-md-1 col-xs-2">
                <div class="header-navbar">
                    <!-- <img class="img-small" src="img/title.png"> -->
                </div>
            </div>
        </div>

        <div class="row header-logo">
            <img src="../img/title.png">
            <!-- <img class="img__logo" src="img/logo.png"> -->
        </div>
        
        <hr class="col-md-12 hr-top">
        <div class="col col-md-offset-3 col-md-8">
            <div class="col col-md-2 nav__item"><a class="text-black" href="../index.html">Home</a></div>
            <div class="col col-md-2 nav__item"><a class="text-black" href="../about.html">About</a></div>
            <div class="col col-md-2 nav__item"><a class="text-black" href="../schedule.html">Schedule</a></div>
            <div class="col col-md-2 nav__item"><a class="text-black" href="../portfolio.html">Portfolio</a></div>
        </div>    
        <hr class="col-md-12 hr-bottom">

		<div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand center-align" href="">REGISTRATION FORM</a>
            </div>  
        </div>

		<form action="register.php" class="form-horizontal col-md-offset-2" method="post">
			<div class="form-group">
			  <label for="inputLName" class="col-sm-2 control-label">Last Name</label>
			    <div class="col-sm-8">
			      <input type="name" name="lname" class="form-control left-align" id="inputLName" placeholder="Enter Last Name" required>
			    </div>
			</div>

			<div class="form-group">
			  <label for="inputFName" class="col-sm-2 control-label">First Name</label>
			    <div class="col-sm-8">
			      <input type="name" name="fname" class="form-control left-align" id="inputFName" placeholder="Enter First Name" required>
			    </div>
			</div>

			<div class="form-group">
			  <label for="inputGender" class="col-sm-2 control-label">Gender</label>
			    <div class="col-sm-8">
			      <input type="radio" name="gender" value="male"> Male<br>
			      <input type="radio" name="gender" value="female"> Female
			    </div>
			</div>

			<div class="form-group">
			  <label for="inputCash" class="col-sm-2 control-label">Cash</label>
			  <div class="col-sm-8">
			   <input type="number" name="cash" class="form-control left-align" id="inputCash" value="0" readonly>
			  </div>
			</div>

			<div class="form-group">
			  <label for="inputPassword" class="col-sm-2 control-label">Password</label>
			  <div class="col-sm-8">
			   <input type="password" name="password" class="form-control left-align" id="inputPassword" placeholder="********" required="">
			  </div>
			</div>

			<div class="form-group">
			  <div class="col-sm-offset-3 col-sm-10">
			    <button class="btn btn-default btn-dark-large" name="register" type="submit">Register</button>
			  </div>
			</div>
		</form>
	</div>
</body>
</html>