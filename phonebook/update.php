<?php
include 'database.php';
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    
    $mysql->query("UPDATE contacts SET name='$name', number = '$number', email = '$email' WHERE id = '".$_POST['id']."'");

    header('Location: index.php');
    exit();
}

$id = $_GET['id'];
$result = $mysql->query('SELECT * FROM contacts WHERE id='.$id);
$data = $result->fetch_object();
?>

<!Doctype>
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

    <div class="container">
      <div class="col-xs-4">
        <div class="form-group">
          <a href="index.php">
          <button class="btn btn-default buttonAdd">View Contacts</button>
          </a>
        </div>
      </div>

      <div class="container-view">
        <div class="row updateContact">                    
          <div class="col-xs-12">
            <h3>Update Contact</h3>
            <hr class="edit">
          </div>
        </div>
        <div>
          <form action="update.php" class="form-horizontal" method="post">
            <?php echo '<input type="text" name="id" value="'.$_GET['id'].'" hidden>'; ?>
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Name</label>
              <div class="col-sm-8">
                <input type="name" value="<?php echo $data->name?>" name="name" class="form-control left-align" id="inputName" placeholder="Enter Full Name" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputNumber" class="col-sm-2 control-label">Contact Number</label>
              <div class="col-sm-8">
                <input type="text" value="<?php echo $data->number?>" name="number" class="form-control left-align" id="inputNumber" placeholder="Enter Phone Number" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-8">
                <input type="email" value="<?php echo $data->email?>" name="email" class="form-control left-align" id="inputEmail" placeholder="Enter Email Address">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button name="submit" type="submit" class="btn btn-default">Save Changes</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      
    </div>
  </body>
</html>
