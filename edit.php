<?php 
include 'header.php'; 
include 'conn.php'; 
$select=$_GET['select'];
$id=$_GET['id'];
$sql="SELECT * FROM `student` WHERE sid='$id'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0)  {
    while ($row = mysqli_fetch_assoc($result)) {
?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="update.php" method="post">
        <div class="form-group row">
            <label class="col-md-2" for="exampleInputName1">Name</label>
            <input class="col-md-8 form-control" type="text" name="sname" value="<?php echo $row ['sname']?>" />
            <input class="col-md-8 form-control" type="hidden" name="sid" value="<?php echo $row ['sid']?>" />
        </div>
        <div class="form-group row">
            <label class="col-md-2">Address</label>
            <input type="text" class="col-md-8 form-control" name="saddress" value="<?php echo $row ['saddres']?>" />
        </div>
        <div class="form-group row">
            <label class="col-md-2">Class</label>
            <select class="col-md-8 form-control"  name="class">
                <option value="" selected disabled>Select Class</option>
                <?php
                
                    $conn = mysqli_connect("localhost","root","","crud") or die("connection fails");
                    $sql = "SELECT * FROM studentclass";
                    $result = mysqli_query($conn , $sql) or die("query unsuccesful.");
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $row ['cid']; ?>"
                <?php 
                if ($select==$row['cname']) {
                    echo "selected";
                }
                ?>
                ><?php echo $row ['cname'];?> </option>
                <?php }?>
            </select>
        </div>
        <div class="form-group row">
            <label class="col-md-2">Phone</label>
            <input type="number" class="col-md-8 form-control" name="sphone" value="<?php echo $row ['sphone']?>"/>
        </div>
        <button type="submit" value="Save" class="btn btn-outline-primary">Submit</button>
    </form>
    <?php 
      }
    } ?>
</div>
</div>
</body>
</html>