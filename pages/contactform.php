<?php


if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$number = $_POST['number'];
	$subject = $_POST['company'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "sales@ntctechnologies.co.za";

	$email = $_POST['budget'];
	if($email == 'Accounts Department'){
		$mailTo = "accounts@ntctechnologies.co.za";
	}
	if($email == 'Sales Department'){
		$mailTo = "sales@ntctechnologies.co.za";
	}
	if($email == 'Tech Department'){
		$mailTo = "support@ntctechnologies.co.za";
	}

	$headers = "From: ".$mailFrom;
	$txt = "You have receieved an e-mail from ".$name.".\n\n".$message."\n\n".$name." ".$number;

	mail($mailTo,$subject,$txt,$headers);
	header("Location: ./../index.html?mailsent");
}
