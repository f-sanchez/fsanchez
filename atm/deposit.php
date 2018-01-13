<?php
	include 'database.php';
	session_start();

	$deposit = $_POST['value'];

	$entry = $mysql->query('SELECT * FROM atm WHERE id='.$_SESSION['result']);
	$new = $entry->fetch_object();

	echo $new->cash .'<br>';
	echo $deposit .'<br>';
	$updateCash = $new->cash + $deposit;

	echo $updateCash;

    $mysql->query("UPDATE atm SET cash = '$updateCash' WHERE id =".$_SESSION['result']);

    header('location: anothertransaction.php');
?>
