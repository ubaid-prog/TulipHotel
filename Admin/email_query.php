<?php
// Create connection
include 'include/config.php';
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$subject = "Tulip Email Marketing"; 
$comments = $_POST[comment];
 if(!isset($hasError)) {
        $emailTo = $_POST[email]; // Put your own email address here
        $body = "Subject: $subject \n\nComments:\n $comments";
		$headers = "MIME-Version: 1.0 \r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1 \r\n";
        $headers .= 'From: Tulip info@Tulip.co.uk' . "\r\n" . 'Reply-To: ' . $email;
		$headers .='X-Mailer: PHP/' . phpversion();

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
		
    }

$msg = "Message Sent Succesfully!!";  
        header("Location:email.php?msg=$msg"); 
?>
