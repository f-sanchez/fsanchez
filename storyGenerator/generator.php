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
              <a class="navbar-brand text-center" href="#view">Once upon a time...</a>
            </div>  
        </div>

        <br><br>
        <div>
          <?php 
            if(isset($_POST['submit'])) {
                $n1 = $_POST['noun1'];
                $n2 = $_POST['noun2'];
                $n3 = $_POST['noun3'];
                $n4 = $_POST['noun4'];
                $v1 = $_POST['verb1'];
                $v2 = $_POST['verb2'];
                $v3 = $_POST['verb3'];
                $a1 = $_POST['adj1'];
                $a2 = $_POST['adj2'];
                $a3 = $_POST['adj3'];
                
                echo "<div class='col-md-offset-3 col-md-6'>In a house besieged lived <b>" .$n1. "</b> and <b>" .$n2."</b>. From where they " .$v1. " in the kitchen <b>" .$n1. "</b> and <b>" .$n2. "</b> <b>" .$v2. "</b> <b>" .$a1. "</b> explosions. The<b> '" .$n3. "'</b>, said <b>" .$n2. "</b>. <b>'" .$a1. "'</b>, said " .$n1. ". <b>'" .$a2. "</b>', said " .$n2. ". The '<b>" .$n4. "</b>', said " .$n1. ".<b> " .$n2. "</b> <b>" .$v2. "</b> to go home but <b>" .$n2. "</b> was already home, there in the <b>" .$a3. "</b> of the country in a house <b>" .$v3. "</b>. </div>";
            }
            ?>
        </div>
      <div>
    </div> 
  </div>
</body>
</html> 
