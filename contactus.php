<?php

$con = mysqli_connect('localhost','root');

if($con){
echo "connection successful";
}else{
	echo "No connection";
}

mysqli_select_db($con,'contactus');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "insert into user(name,email,mobile,comment) values ('$name','$email','$message')" ;

mysqli_query($con, $query);
header('location:index.php');

?>