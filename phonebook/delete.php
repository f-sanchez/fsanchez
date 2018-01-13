<?php
include 'database.php';

mysqli_query($mysql, "DELETE FROM contacts where id = ".$_GET['id']."");


header("location: index.php");