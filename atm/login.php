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
          <a class="navbar-brand center-align" href="">LOG IN</a>
        </div>  
    </div>

    <form action="view.php" class="form-horizontal col-md-offset-4" method="post">
		<div class="form-group">
		  <label for="inputID" class="col-sm-2 control-label">ID</label>
		    <div class="col-sm-3">
		      <input type="name" name="id" class="form-control left-align" id="inputID" placeholder="Assigned ID" required>
		    </div>
		</div>

		<div class="form-group">
		  <label for="inputPassword" class="col-sm-2 control-label">Password</label>
		  <div class="col-sm-3">
		   <input type="password" name="password" class="form-control left-align" id="inputPassword" placeholder="*****">
		  </div>
		</div>

		<div class="form-group">
		  <div class="col-sm-offset-2 col-sm-5">
		    <button class="btn btn-default btn-dark-large" name="login" type="submit">Login</button>
		  </div>
		</div>
	</form>

	<?php 
	session_start();
 	/****************************/
 	if ($_SESSION['fail'] > 0)
 	echo '<p class="center-align padding-reg">*Invalid ID or Password. Failed attempt(s): ' .$_SESSION['fail']. '</p>';

 	/****************************/

	?>

</body>
</html>

