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
$password="";
$mydb="test";
// $username = "id5008930_root";
// $password = "root123";
// $mydb="id5008930_test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $mydb);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
// echo "connected successful , thankyou";
}
//get values froom html
$mobile="";

$upload_success="";
$img_src="";
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobilenumber'];
$message = $_POST['message'];
$img_src = $_POST['fileToUpload'];
if($img_src!=null){
$count=0;
$target_dir = "uploads/";
$uploadOk = 1;

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$filename=$target_dir.$count.'.'.$imageFileType;
while(file_exists($filename)) {
	$count++;
}
// echo $filename;
// Check if image file is a actual image or fake image
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
			    echo "Sorry, only JPG, JPEG, PNG  files are allowed.";
			    $uploadOk = 0;
		}
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
// upload file
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	$destination_path = getcwd().DIRECTORY_SEPARATOR;
// $target_path = $destination_path . basename( $_FILES["profpic"]["name"]);
// echo $target_file;

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $filename)) {
        // echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $upload_success=1;
       
    } else {
        echo "Sorry, there was an error uploading your file.";
        $upload_success=0;
    }
}
if((empty($name))&&(empty($mobile))&&(empty($email))&&(empty($message))){
	echo 'please fill all the fields';
}else{
	$sql = "INSERT INTO testimonial (name,mobile,email,message,img_src)
VALUES ('$name','$mobile','$email','$message','$filename')";
}
}

?>

<?php 
if ($conn->query($sql) === TRUE) 
{
	session_start();
	$_SESSION["success"] = true; 
	header("Location: home.php?success=true");
} 
else { 
  	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
