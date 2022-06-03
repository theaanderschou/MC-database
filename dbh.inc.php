<?php

/*
$dbServername = "theaanderschou.com.mysql";
$dbUsername = "theaanderschou_comwordpress";
$dbPassword = "#BabyBias";
$dbName = "theaanderschou_comwordpress";
*/

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "MC-contact_form";

/*
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
mysql_select_db("MC-contact_form",$conn);
*/

$navn = $_POST['navn'];
$email = $_POST['email'];
$besked = $_POST['besked'];



if(!empty($_POST["submit"])) {
	$navn = $_POST["navn"];
	$email = $_POST["email"];
	$besked = $_POST["besked"];

	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
	mysql_select_db("MC-contact_form",$conn);
	
	mysql_query("INSERT INTO mc_contact (navn, email, besked) VALUES ('" . $navn. "', '" . $email. "','" . $besked. "')");
	$insert_id = mysql_insert_id();
	if(!empty($insert_id)) {
	$message = "Successfully Added.";
	}
}
?>