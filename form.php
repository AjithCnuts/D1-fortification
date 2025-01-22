<?php
$mail_to = 'rishika@d1secure.com'; // specify your email here



// Assigning data from the $_POST array to variables
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone_number'];
$organization = $_POST['organization'];
$city = $_POST['city'];
$services = $_POST['services'];
$message = $_POST['message'];




// Construct email subject
$subject = 'Contact From Website Visitor ' .$name;



// Construct email body
$body_message = 'Name:'.$name ;
$body_message = 'Phone_Number:'.$phone ;
$body_message = 'Email:'.$email;
$body_message = 'Organization:'.$organization;
$body_message = 'city:'.$city;
$body_message = 'services:'.$services;
$body_message = 'Message:'.$message;
$body_message = 'Name:' .$name."\r\n" .$phone."\r\n" .$email."\r\n" .$organization."\r\n" .$city."\r\n" .$services."\r\n" .$message ;






// Construct email headers
$headers = 'From: ' . $email . "\r\n" ;
$headers = 'Reply-To: ' . $email . "\r\n";



$mail_sent = mail($mail_to, $subject, $body_message, $headers);



if ($mail_sent == true){ ?>
<script language="javascript" type="text/javascript">
alert('Thank you for the message. We will contact you shortly.');
window.location = 'contact.html';
</script>
<?php } else { ?>
<script language="javascript" type="text/javascript">
alert('Message not sent. Please, notify the site administrator rishika@d1secure.com');
window.location = 'contact.html';
</script>
<?php
}

?>