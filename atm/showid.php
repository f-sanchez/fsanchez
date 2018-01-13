<!DOCTYPE html>
<html>
<head>
	<title>ATM: Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
	      <a class="navbar-brand center-align" href="">You have been registered successfully!</a>
	    </div>  
	</div>


	<?php 
		session_start();
		include 'database.php';
		$id = $mysql->query('SELECT id FROM atm ORDER BY id DESC LIMIT 1');
		$result = $id->fetch_object();

		echo '<div class="padding-mini"><h4 class="center-align">Your Account ID is <b>' .$result->id. '.</b></h4></div>';

	?>

    <form action="login.php" class="form-horizontal col-md-offset-4" method="post">
		<div class="form-group">
		  <div class="col-sm-offset-2 col-sm-8">
		    <button class="btn btn-default btn-dark" name="login" type="submit">Proceed to login</button>
		  </div>
		</div>
	</form>

	<?php 

 	/****************************/
 	if ($_SESSION['fail'] > 0)
 	echo '<p class="center-align padding-reg">*Invalid ID or Password. Failed attempt(s): ' .$_SESSION['fail']. '</p>';
 	/***************************/
	?>


</body>
</html>

