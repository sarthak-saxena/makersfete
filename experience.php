<?php
	$flag=1;
	$youremail = "fepsi.india@gmail.com"; // Enter your email here!!
	$usersname = $_POST["audi_name"];
	$gender = $_POST["audi_gender"];
	$age = $_POST["audi_age"];
	$org = $_POSt["audi_org"];
	$phone = $_POST["audi_phno"];
	$email = $_POST["audi_email"];
	$address = $_POST["audi_address"];
	$city = $_POST["audi_city"];
	$state = $_POST["audi_state"];
	$pin = $_POST["audi_pin"];
	$country = $_POST["audi_country"];
	$passreq = $_POST["audi_passreq"];
	$partdet = $_POST["audi_partdet"];
	$pubinfo = $_POST["audi_pubinfo"];


	$usersemail = $_POST["email"];
	$usersmessage = $_POST["comment"];
	$subject = 'A user wants to experience it.';
	$message = "Name : " . $usersname . "\nGender : " . $gender . "\nAge : " . $age . "\nOrganization : " . $org . "\nPhone : " . $phone . "\nEmail : " . $email . "\nAddress : " . $address . "\nCity : " . $city . "\nState : " . $state . "\nPIN : " . $pin . "\nCountry : " . $country . "\nPasses Required : " . $passreq . "\nParty Details : " . $partdet . "\nHow they heard : " . $pubinfo . "\n";  
			
	$headers = 'From:' . "experience@makersfete.com" . "\r\n";
	$mail=mail($youremail, $subject, $message, $headers);
	if(!$mail){
		$flag=1;
	}
	else $flag=0;
	if($flag==0){
		setcookie("sent", 1, time()+20000);
		echo("<meta http-equiv=\"refresh\" content=\"0;URL='experienceit.php'\">");
	}
	else{
		setcookie("fail", 1, time()+20000);
		echo("<meta http-equiv=\"refresh\" content=\"0;URL='experienceit.php'\">");
	}
?>