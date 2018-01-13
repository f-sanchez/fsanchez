<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
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
              <a class="navbar-brand center-align" href=""><h1>Successful transaction!</h1></a>
            </div>  
        </div>
		
		

	    <div class="form-group">
		    <div class="form-group col-sm-offset-4 col-sm-8 ">
			  	<form action="view.php" method="post">
		  			<button class="btn btn-default padding-mini" name="" type="submit">Check balance</button>
		  			<button class="btn btn-default padding-mini" name="" type="submit">Do another transaction</button>
		       	</form>
			</div> 
		</div>

		<div class="col col-md-8 col-md-offset-2 center-align">
			<br><br><br>
	  		<a class="btn btn-default btn-dark-large" href = "delete.php" onclick="return confirm('Are you sure?')">Delete Account</a>
	  		<a class="btn btn-default btn-dark-large" href = "logout.php">Sign Out</a>
		</div>
	</div>
</body>
</html>