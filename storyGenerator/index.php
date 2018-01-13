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
              <a class="navbar-brand text-center" href="#view">STORY GENERATOR</a>
            </div>  
        </div>


         <div class="col col-sm-offset-2">
          <div class="col-sm-offset-2">
            *Note: Input verbs in past tense to match the story context. Thank you! <br>
            *Disclaimer: The story that will be generated is taken from google.

          </div> 
          <form action="generator.php" class="form-horizontal" method="post">
            <div class="form-group">
              <label for="" class="col-sm-1 control-label">Noun 1: </label>
              <div class="col-sm-4">
                <input type="text" name="noun1" class="form-control left-align" id="" placeholder="" required>
              </div>

              <label for="" class="col-sm-1 control-label">Verb 2: </label>
              <div class="col-sm-4">
                <input type="text" name="verb2" class="form-control left-align" id="" placeholder="" required>
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-1 control-label">Noun 2: </label>
              <div class="col-sm-4">
                <input type="text" name="noun2" class="form-control left-align" id="" placeholder="" required>
              </div>

              <label for="" class="col-sm-1 control-label">Verb 3: </label>
              <div class="col-sm-4">
                <input type="text" name="verb3" class="form-control left-align" id="" placeholder="" required>
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-1 control-label">Noun 3: </label>
              <div class="col-sm-4">
               <input type="text" name="noun3" class="form-control left-align" id="" placeholder="">
              </div>

              <label for="" class="col-sm-1 control-label">Adj. 1: </label>
              <div class="col-sm-4">
                <input type="text" name="adj1" class="form-control left-align" id="" placeholder="" required>
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-1 control-label">Noun 4: </label>
              <div class="col-sm-4">
               <input type="text" name="noun4" class="form-control left-align" id="" placeholder="">
              </div>

              <label for="" class="col-sm-1 control-label">Adj. 2: </label>
              <div class="col-sm-4">
                <input type="text" name="adj2" class="form-control left-align" id="" placeholder="" required>
              </div>
            </div>

            <div class="form-group">
              <label for="" class="col-sm-1 control-label">Verb 1: </label>
              <div class="col-sm-4">
               <input type="text" name="verb1" class="form-control left-align" id="" placeholder="">
              </div>

              <label for="" class="col-sm-1 control-label">Adj. 3: </label>
              <div class="col-sm-4">
                <input type="text" name="adj3" class="form-control left-align" id="" placeholder="" required>
              </div>
            </div>

            <br><br>

            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-12">
                <button name="submit" type="submit" class="btn btn-default">Generate Story</button>
              </div>
            </div>
          </form>
        </div>
    </div>

  </div>
</body>
</html>