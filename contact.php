<?php
    $name = $_POST['name'];
    $visitor_number = $_POST['number'];
    $visitor_email = 'contactbrokenbarriers@gmail.com';
    $address = $_POST['message'];

    $email_from = 'OrderPlaced_GZP@doctor_phoneservice.com';
    $email_subject = "$name Order Placed";
    $email_body = "Full Name: $name.\n".
                    "Mobile Number: $visitor_number.\n".
                        "Address: $address.\n";

    $to = "warior.mohammadsahil@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_number \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

    
?>
