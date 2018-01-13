<?php
include 'database.php';
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    
    $mysql->query("INSERT INTO contacts (name, number, email) VALUES ('$name', '$number', '$email')");

    header('Location: index.php');
    exit();
}
?>
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
      <div class="noUpdate">
        <div class="col-xs-4">
          <div class="form-group">
            <a href="#view">
            <button class="btn btn-default buttonAdd">View Contacts</button>
            </a>
          </div>
        </div>

        <div class="row createContact">                    
          <div class="col-xs-12">
            <h3>Create New Contact</h3>
            <hr class="contactsByName">
          </div>
        </div>

        <div>
          <form action="create.php" class="form-horizontal" method="post">
            <div class="form-group">
              <label for="inputName" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="name" name="name" class="form-control left-align" id="inputName" placeholder="Enter Full Name" required>
                </div>
            </div>

            <div class="form-group">
              <label for="inputNumber" class="col-sm-2 control-label">Contact Number</label>
                <div class="col-sm-10">
                  <input type="text" name="number" class="form-control left-align" id="inputNumber" placeholder="Enter Phone Number" required>
                </div>
            </div>

            <div class="form-group">
              <label for="inputEmail" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
               <input type="email" name="email" class="form-control left-align" id="inputEmail" placeholder="Enter Email Address">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button name="submit" type="submit" class="btn btn-default">Add Contact</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="js/route.js"></script>
  </body>
</html>