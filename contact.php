<?php

// echo phpinfo();
//     $to = "aayushi@Pipabella.com";
//     $from = $_REQUEST['name'];
//     $subject = $_REQUEST['subject'];
//     $name = $_REQUEST['name'];
//     $headers = "From: $from";

//     $fields = array();
//     $fields{"name"} = "name";
//     $fields{"email"} = "email";
//     $fields{"subject"} = "subject";
//     $fields{"message"} = "message";

//     $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

//     $send = mail($to, $subject, $body, $headers);

?>
<?php
$servername = "localhost";
$username = "thedenta_wp784";
$password = "aayushi22";
$mydb="thedenta_studio_new";
// $username="root";
// $password="";
// $mydb="test";

$conn = mysqli_connect($servername, $username, $password, $mydb);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
echo "connected successful , thankyou";
}
//get values froom html

$name = $_POST['name'];
$mobile = $_POST['mobilenumber'];
$email = $_POST['email'];
$message = $_POST['message'];

// echo $name;
// echo $mobile;
// echo $email;
// echo $message;
//insert.

$sql = "INSERT INTO contact (name,mobile,email,message)
VALUES ('$name','$mobile','$email','$message')";
?>
<?php 
if ($conn->query($sql) === TRUE) 
{
    // session_start();
    // $_SESSION["success"] = true; 
// header("Location: home.php?success=true");
	/************************************************************/
	/*****************  SEND EMAIL TO STUDIO 32 FROM CUSTOMER ******************/
	/************************************************************/
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email']; 
    $to = "studio32clinic@gmail.com"; 
    $subject = $_POST['name']." contacted you via email from the contact us page";
    $message = $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    // echo "The email message was sent.";
	/************************************************************/
	/*****************  SEND EMAIL TO customer FROM studio  ******************/
	/************************************************************/
  	$from1 = "hello@thedentalstudio32.com"; 
    $to1 = $_POST['email']; 
    $subject1 = "Thank You for Contacting STUDIO32";
    $message1 = "Hello ".$_POST['name']." ,\n Thank You for contacting studio32.\n Your query has been sent to the customer executive. \n You will be contacted as soon as possible. \n\n Regards, \n Team Studio32. \n\n\n PLEASE NOTE: This is an automatically generated response please do not reply to this email.";
    $headers1 = "From:" . $from1;
    mail($to1,$subject1,$message1, $headers1);
    // echo "The email message was sent.";
    header("Location: http://thedentalstudio32.com/index.php");
    exit;

} 
else { 
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// send email


$conn->close();
?>
