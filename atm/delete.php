

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

	    <?php
			include 'database.php';

			session_start();

			$result = mysqli_query($mysql, "DELETE FROM atm where id = ".$_SESSION['result']."");

			if(!$result){
				echo '<a class="navbar-brand center-align" href="">Error! Delete unsuccessful!</a>';
			}
			else{
				echo '<a class="navbar-brand center-align" href="">Delete successful!</a>';
			}

		?>

	    </div>  
	</div>

    <form action="index.php" class="form-horizontal col-md-offset-4" method="post">
		<div class="form-group">
		  <div class="col-sm-offset-2 col-sm-8">
		    <button class="btn btn-default btn-dark" name="login" type="submit">Go to Home</button>
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

