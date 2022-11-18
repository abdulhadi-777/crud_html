<?php
include 'header.php';
?>
<div id="main-content">
    <div class="row subheader">
<h2 class="col-md-9">All Records</h2>
 <a class="col-md-3 " href="add.php"><button type="button" class="btn btn-outline-primary">Add a new record</button></a>
 </div>
    <?php
    $conn = mysqli_connect("localhost","root","","crud") or die("connection fails");
    $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
    $result = mysqli_query($conn , $sql) or die("query unsuccesful.");

    if (mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="1px" class="table table-bordered table-hover">
    <thead>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Class</th>
        <th scope="col">Phone</th>
        <th scope="col">Action</th>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                <td scope="row"><?php echo $row ['sid']?></td> 
                <td scope="row"><?php echo $row ['sname']?></td>
                <td scope="row"><?php echo $row ['saddres']?></td>
                <td scope="row"><?php echo $row ['cname']?></td>
                <td scope="row"><?php echo $row ['sphone']?></td>
                <td>
               <a href="edit.php?select=<?php echo $row['cname'];?>&id=<?php echo $row['sid'];?>"> <button type="button" class="btn btn-outline-warning">Edit</button></a>
               <a href="delete.php?id=<?php echo $row['sid'];?>"> <button type="button" class="btn btn-outline-danger">Delete</button></a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } else {
    echo "<h2>No record found</h2>";
} 
mysqli_close($conn);
?>
</div>
</div>    
</div>
</body>
</html>
