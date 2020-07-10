<?php  
$db=mysql_connect('localhost','root','','');
$email=$_POST['email'];
$password=$_POST['password'];
$encrypt_password=md5($password);
mysqli_query($db,"INSERT into login(email_id,pass) VALUES ('$email','$encrypt_password')");
header('location:18IT135.html');
?>