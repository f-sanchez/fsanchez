<!DOCTYPE html>
<html ng-app="">
<head>
    <title>
       CPE 75N Web Development
    </title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="phonebook/css/stylePhonebook.css" rel="stylesheet">
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
            <img src="img/title.png">
            <!-- <img class="img__logo" src="img/logo.png"> -->
        </div>
        
        <hr class="col-md-12 hr-top">
        <div class="col col-md-offset-3 col-md-8">
            <div class="col col-md-2 nav__item"><a class="text-black" href="index.html">Home</a></div>
            <div class="col col-md-2 nav__item"><a class="text-black" href="about.html">About</a></div>
            <div class="col col-md-2 nav__item"><a class="text-black" href="schedule.html">Schedule</a></div>
            <div class="col col-md-2 nav__item"><a class="text-black" href="portfolio.html">Portfolio</a></div>
        </div>    
        <hr class="col-md-12 hr-bottom">

        <div class="col col-md-offset-2 col-md-8 container-table">
            <div>
                <?php
                    $value1 = $_POST['value1'];
                    $value2 = $_POST['value2'];

                    $count1 = $count2 = array_fill(0, 26, 0);
                    $total=0;

                    
                    if(isset($value1) && isset($value2)){
                      $value1 = strtolower($value1);
                      $value2 = strtolower($value2);

                      if($value1 == $value2){
                        echo "Same Name";
                      }
                        
                      else{
                        for($i=0; $i<strlen($value1); $i++){
                          for($j=0; $j<=26; $j++){
                            if($value1[$i] == chr(97+$j)){
                                  $count1[$j]++;
                            } 
                          }
                        }

                        for($i=0; $i<strlen($value2); $i++){
                            for($j=0; $j<=26; $j++){
                               if($value2[$i] == chr(97+$j)){
                                    $count2[$j]++;
                              } 
                            }
                          }

                        for($i=0; $i<=25; $i++){
                            if(($count1[$i] != 0)&&($count2[$i] != 0)){
                              $total = $total + $count1[$i] + $count2[$i];
                            }
                          }

                        if($total == 0){
                            echo '<p>Name 1: <b>' .strtoupper($value1). '</b></p>';
                            echo '<p>Name 2: <b>' .strtoupper($value2). '</b></p>';
                            echo '<p><b>No Common Letters :(</b></p>';
                        } else{
                            $f = $total%6;

                            echo '<p>Name 1: <b>' .strtoupper($value1). '</b></p>';
                            echo '<p>Name 2: <b>' .strtoupper($value2). '</b></p>';
                            echo '<p> No. of Common Letters: <b>' .$total. '</b></p>';
                            echo '<p class="txt-large">';

                            switch($f){
                              case 1:
                              echo "FRIENDS";
                              break;
                              case 2:
                              echo "LOVERS";
                              break;
                              case 3:
                              echo "ADMIRERS";
                              break;
                              case 4:
                              echo "MARRIED";
                              break;
                              case 5:
                              echo "ENEMY";
                              break;
                              case 0:
                              echo "SWEET";
                              break;
                            }
                            echo '</p>';
                      }
                    }
                    }
                ?>
            </div>
            <div class="input-gap">
                <button class="btn btn-dark-large"><a class="btn-redirect" href="activity1.html"><--Previous Activity</a></button>
                <button class="btn btn-dark-large"><a class="btn-redirect" href="activity2.html">FLAMES Again</a></button>
                <button class="btn btn-dark-large"><a class="btn-redirect" href="phonebook/index.php">Next Activity --></a></button>
            </div>
        </div>
    </div>
    
    <div class="footer">
      &copy; 2017 All rights reserved. Inspired by <b>CPE 75N</b>
    </div>

    <script src="js/angular.min.js"></script>
</body>
</html>
