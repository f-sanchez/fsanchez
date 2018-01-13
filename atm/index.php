<?php 
include 'database.php';
/*******************/	
session_start();    
$_SESSION['fail'] = 0;
/*******************/

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
              <a class="navbar-brand center-align" href=""><h1>WELCOME to ATM!</h1></a>
            </div>  
        </div>

        <div class="top-margin center-align">
        	<a class="btn btn-default btn-dark-large" href="register.php">Register</a>
        	<a class="btn btn-default btn-dark-large" href="login.php">Login</a>
        </div>

        
	</div>
</body>
</html>