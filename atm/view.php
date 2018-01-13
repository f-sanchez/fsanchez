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

		<br><br><br><br>
		
		<?php 
			include 'database.php';
			session_start();

			if(isset($_POST['id'])){
			    $result = $mysql->query('SELECT * FROM atm WHERE id='.$_POST['id']);
				$entry = $result->fetch_object();


				$_SESSION['pass'] = $_POST['password'];
				$_SESSION['result'] = $_POST['id'];
				$_SESSION['entry'] = $entry;
				$_SESSION['db_password'] = $entry->password;
				$_SESSION['db_id'] = $entry->id;
			}else{
				$result = $mysql->query('SELECT * FROM atm WHERE id='.$_SESSION['result']);
				$entry = $result->fetch_object();

				$_SESSION['entry'] = $entry;
			}

			if($_SESSION['fail'] < 2){
				if (($_SESSION['result'] != 0) || (isset($_POST['login']) && !empty($_POST['id']) && !empty($_POST['password']))) {
			       if ($_SESSION['result'] == $_SESSION['db_id'] && $_SESSION['pass'] == $_SESSION['db_password']) {
			       		$_SESSION['fail'] = 0 ;
			       		echo 
			       			// $entry->gender.
							'<h1 class="center-align padding-mini">Hello, ';
							if ($_SESSION['entry']->gender == 'F' OR $_SESSION['entry']->gender == 'f') echo "Ms. ";
							else echo "Mr. ";
							
						echo $_SESSION['entry']->lname. ', '.$_SESSION['entry']->fname.'</h1>
						<h2 class="center-align"> Your current cash: '.$_SESSION['entry']->cash. '</h2><br>';
				 
			       } else {
			       	  $_SESSION['fail'] += 1;
			          header('location: login.php');
			       }
			    }
			} else{
				header('location: index.php');
			}
		?>

	    <div class="form-group">
		    <div class="form-group col-sm-offset-4 col-sm-8 ">
			  	<form action="transaction.php" method="post">
		  			<button class="btn btn-default padding-mini" name="deposit" type="submit">Deposit</button>
		  			<button class="btn btn-default padding-mini" name="withdraw" type="submit">Withdraw</button>
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