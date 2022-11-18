<?php
include('conn.php');
echo $stu_name = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_class = $_POST['class'];
echo $stu_phone = $_POST['sphone'];
$sql = "INSERT INTO student(sname,saddres,sclass,sphone) VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
$result = mysqli_query($conn , $sql) or die("query unsuccesful.");
header('Location:index.php');
mysqli_close($conn);
?>