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
$username="root";
$password=""
$mydb="test"

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
echo $name;
echo $mobile;
echo $email;
echo $message;
//insert.

$sql = "INSERT INTO contact (name,mobile,email,message)
VALUES ('$name','$mobile','$email','$message')";
?>
<?php 
if ($conn->query($sql) === TRUE) 
{
    session_start();
    $_SESSION["success"] = true; 
header("Location: home.html?success=true");

} 
else { 
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
