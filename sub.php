<?php
$name=$_POST['name'];
$num=$_POST['num'];
$email=$_POST['email'];
$type=$_POST['cat'];
$con=new mysqli("localhost","root","","cot");
$sql="INSERT INTO `odr`(`name`, `mobile`, `email`, `type`) VALUES ('$name','$num','$email','$cat')";
$con->query($sql);
?>
