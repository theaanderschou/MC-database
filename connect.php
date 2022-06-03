<?php

$conn = mysql_connect("localhost","root","");
mysql_select_db("contact_form",$conn);

if(!empty($_POST["submit"])) {
	$navn = $_POST["navn"];
	$email = $_POST["email"];
	$besked = $_POST["besked"];

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("MC-contact_form",$conn);
	mysql_query("INSERT INTO mc_contact (navn, email, besked) VALUES ('" . $navn. "', '" . $email. "','" . $besked. "')");
	$insert_id = mysql_insert_id();
	if(!empty($insert_id)) {
	$message = "Successfully Added.";
	}
}
?>