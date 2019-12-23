<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email='doctorphoneservicegzp@gmail.com';
		$phone=$_POST['number'];
		$msg=$_POST['message'];

		$to='warior.mohammadsahil@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Number :".$phone."\n"."Address :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
