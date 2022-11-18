<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group row">
            <label class="col-md-2" for="exampleInputName1">Name</label>
            <input class="col-md-8 form-control" type="text" name="sname" placeholder="Name" />
        </div>
        <div class="form-group row">
            <label class="col-md-2">Address</label>
            <input type="text" class="col-md-8 form-control" name="saddress" placeholder="Password" />
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
                <option value="<?php echo $row ['cid']; ?>"><?php echo $row ['cname'];?> </option>
                <?php }?>
            </select>
        </div>
        <div class="form-group row">
            <label class="col-md-2">Phone</label>
            <input type="text" class="col-md-8 form-control" name="sphone" placeholder="Phone Number" />
        </div>
        <button type="submit" value="Save" class="btn btn-outline-primary">Submit</button>
    </form>
</div>
</div>
</body>
</html>
