<?php

 $stu_name = $_POST["sname"]; 
 $stu_email = $_POST["email"]; 
 $stu_address = $_POST["saddress"]; 
 $stu_class = $_POST["class"]; 
 $stu_phone = $_POST["sphone"];   


$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");
$sql = "INSERT INTO student(sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_email}','{$stu_address}','{$stu_class}','{$stu_phone}') ";
$result = mysqli_query($conn, $sql) or die('"Query Unsuccesssful"');

header('Location: http://localhost/crud_html/index.php');

mysqli_close($conn);

?>