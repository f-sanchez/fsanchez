<!DOCTYPE html>
<html>
<head>
<title>Phone Directory</title>
<link rel="shortcut icon" href="images/2.png" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet" type="text/css"
>
</head>

<body ng-app="myApp">
    <div class="container">
        <div class="noUpdate">
            <div class="row">
                <div class="col-xs-4">
                    <div class="form-group">
                        <a href="#create"><button class="btn btn-default buttonAdd">Create New Contact</button></a>
                    </div>
                </div>
            </div>

            <?php
                include 'database.php';
                $result = $mysql->query('SELECT * FROM contacts');
                echo '<div class="row contacts">
                        <div class="col-xs-12">
                          <h3>Contacts</h3> 
                          <hr class="contactsByName line-maroon">';

                while($row = $result->fetch_object()) {
                echo     '<div class="tagsa">
                          <div class="row">
                            <div class="col-xs-8 contactName">
                             <p>'.$row->name.'</p>
                            </div>
                            <div class="col-xs-4 text-right">
                             <p><a href="delete.php?id='.$row->id.'">Delete</a>'."  |   ".'<a href="update.php?id='.$row->id.'">Update</a></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-6 indented">
                              <p>'.$row->number.'</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-6 indented">
                              <p>'.$row->email.'</p>
                            </div>
                          </div>
                          </div>   
                          <hr class="line-maroon">';
                }
            ?>
        </div>

        <div class="pull-left">
        <button class="btn btn-dark-large"><a class="btn-redirect" href="../activity2.html"><-- Previous Activity</a></button>
        </div>
        <div class="pull-right">
        <button class="btn btn-dark-large"><a class="btn-redirect" href="../atm/index.php">Next Activity --></a></button>
        </div>
    </div>  
    <script src="js/route.js"></script>
</body>
</html>