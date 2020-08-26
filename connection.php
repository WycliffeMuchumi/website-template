<?php

$con = mysqli_connect('localhost', 'root');

if($con){
    echo "connection successful";
}else{
    echo "connection unsuccessful!!!";
}

mysqli_select_db($con, 'verasic');

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$mobile_no = $_POST['mobile_no'];
$comment = $_POST['comment'];

$query = " insert into clients (firstName, lastName, email, mobile_no, comment)
values('$firstName', '$lastName', '$email', '$mobile_no', '$comment') ";

echo "$query";

mysqli_query($con,$query);

header('location:index.php')

?>