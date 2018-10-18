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
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email']; 
    $to = "aayushi.kambriya5@gmail.com"; 
    $subject = $_POST['name']." contacted you via email from the contact us page";
    $message = $_POST['message'];
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";
} 
else { 
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// send email


$conn->close();
?>
