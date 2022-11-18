<?php
include('conn.php');
echo $id = $_POST['sid'];
echo $stu_name = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_class = $_POST['class'];
echo $stu_phone = $_POST['sphone'];
$sql = "UPDATE `student` SET sname='$stu_name',saddres='$stu_address',sclass='$stu_class',sphone='$stu_phone' WHERE sid='$id'";
$result = mysqli_query($conn,$sql) or die("query unsuccesful.");
header('Location:index.php');
mysqli_close($conn);
?>
