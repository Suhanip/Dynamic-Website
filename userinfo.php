<?php

$link = mysqli_connect('localhost','root',"",'flower');

if($link){
	echo "Connection successful";
}else{
	echo "No connection";
}

//mysqli_select_db($link , 'flower');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userinfodata (user, email, mobile, comment) values ('$user', '$email', '$mobile', '$comments' ) ";

echo "$query";

mysqli_query($link, $query);

header('location:index.php');

?>