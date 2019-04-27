
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
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$date_today = date("Y/m/d");

// echo $name;
// echo $mobile;
// echo $email;
// echo $message;
//insert.

$sql = "INSERT INTO appointments (name,mobile,email,date_today)
VALUES ('$name','$mobile','$email','$date_today')";
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
    $to = "hello@thedentalstudio32.com"; /*studio32clinic@gmail.com*/
    $subject="Appointement recieved from ".$_POST['name'];
    $message = "Hello ".$_POST['name'].", \n wants to book an appointment today.\n Please revert to the email mentioned below to confirm a slot.\n Mobile number :" .$_POST['mobile']." \n Email: ".$_POST['email']."\n\n Regards, \n Team Studio32.";
    // $message = $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    // echo "The email message was sent.";
	/************************************************************/
	/*****************  SEND EMAIL TO customer FROM studio  ******************/
	/************************************************************/
  	$from1 = "hello@thedentalstudio32.com"; 
    $to1 = $_POST['email'];
    $subject1 = "Thank You for Contacting STUDIO32";
    $message1 = "Hello ".$_POST['name'].",\n Request has been made to book an appointement for you. \n Customer Exceutive will contact you as soon as possible.\n\n Regards, \n Team Studio32.";
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
