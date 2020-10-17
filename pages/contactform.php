<?php


if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$number = $_POST['number'];
	$subject = $_POST['company'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "nonhlanhla@ntctechnologies.co.za";
	$headers = "From: ".$mailFrom;
	$txt = "You have receieved an e-mail from ".$name.".\n\n".$message."\n\n".$name." ".$number;

	mail($mailTo,$subject,$txt,$headers);
	header("Location: ./../index.html?mailsent");
}
