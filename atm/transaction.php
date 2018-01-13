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

        <?php 
            include 'database.php';
            session_start();
            echo '<div class="container-fluid">
                    <div class="navbar-header">';

            if (isset($_POST['deposit'])){
                echo '<a class="navbar-brand center-align" href="">Deposit Transaction</a>
                    </div>';

            } else if (isset($_POST['withdraw'])){
                echo '<a class="navbar-brand center-align" href="">Withdrawal Transaction</a>
                    </div>';
            } else {
                header('location: login.php');
            }
        ?>

        <?php
            if(isset($_POST['deposit'])){
                echo '<form action="deposit.php" class="form-horizontal col-md-offset-4" method="post">';
            }else if(isset($_POST['withdraw'])){
                echo '<form action="withdraw.php" class="form-horizontal col-md-offset-4" method="post">';
            }
        ?>
			<div class="form-group">
                <div class="col-md-8 center-align">
                    <label class="col-sm-4 control-label top-margin">Enter Amount</label>
                    <div class="col-sm-5">
                        <input class="form-control left-align top-margin" type="name" name="value" placeholder="Multiples of 100">
                    </div>
                </div>
			</div>

		<div class="form-group">
            <div class=" col-sm-10">
                    <?php 
                        include 'database.php';

                        if (isset($_POST['deposit'])){
                            echo '<button class="btn btn-default btn-dark-large" name="deposit" type="submit">Submit</button>';
                        } else if (isset($_POST['withdraw'])){
                            echo '<button class="btn btn-default btn-dark-large" name="withdraw" type="submit">Submit</button>';
                        }
                    ?>
                    </form>
                    <form method="post" action="view.php">
                    <button class="btn btn-default btn-dark-large" name="cancel" type="submit">Back</button>
                    </form>
            </div> 
        </div>
	</div>

</body>
</html>