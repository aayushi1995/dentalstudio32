
<?php
$servername = "localhost";
$username = "id5008930_root";
$password = "root123";
$mydb="id5008930_test";
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

$sql = "INSERT INTO appointments (name,mobile,email,appointement_date)
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
    $to = "aayushi.kambriya5@gmail.com"; /*studio32clinic@gmail.com*/
    $subject = $_POST['name']." contacted you via email from the contact us page";
    $message = $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
	/************************************************************/
	/*****************  SEND EMAIL TO customer FROM studio  ******************/
	/************************************************************/
  	$from1 = "hello@studio32.com"; 
    $to1 = $_POST['email']; 
    $subject1 = "Thank You for Contacting STUDIO32";
    $message1 = "Hello ".$_POST['name']." Thank You for contacting studio32. Your query has been sent to the customer executive. You will be contacted as soon as possible. PLEASE NOTE: This is an automatically generated response please don not reply to this email.";
    $headers1 = "From:" . $from1;
    mail($to1,$subject1,$message1, $headers1);
    echo "The email message was sent.";

} 
else { 
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// send email


$conn->close();
?>
