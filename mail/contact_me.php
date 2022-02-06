<?php
if(!empty($_POST["submit"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$content = $_POST["message"];

	$toEmail = "#";
	echo "Sending";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, "Zprava z webu", $content, $mailHeaders)) {
	    echo "OK";
	    $message = "Děkujem že jste nás kontaktovali :-)";
	    echo $message;
		$type = "hotovo";
		header("Location: Kontakt.html");
	}else
	echo "error";

}
?>