<?php 
include('conn.php');
$id=$_GET['id'];
$sql="DELETE FROM `student` WHERE sid='$id'";
$result=mysqli_query($conn,$sql);
if ($result) {
    header('Location:index.php');
}else{
    echo "deletion failed";
}
?>
