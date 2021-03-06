<!DOCTYPE html>
<html>
  <head>
    <title>Phone Directory</title>
      <link rel="shortcut icon" href="images/2.png">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/style.css" rel="stylesheet">
  </head>

  <body ng-app="myApp">
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

        <div>
          <!-- <nav class="navbar navbar-default"> -->
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand text-center" href="#view">PHONE DIRECTORY</a>
            </div>  
          </div>
          <!-- </nav> -->
        </div>

    <div class="container-view" ng-view></div>
    </div>

    <div class="footer">
      &copy; 2017 All rights reserved. Inspired by <b>CPE 75N</b>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <!-- <script src="angular.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>
    <!-- <script src="angular-route.min.js"></script> -->
    <script src="js/route.js"></script>
    
  </body>
</html>