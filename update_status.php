<?php
include "connection.php";
if(isset($_POST['update'])){
    $query = "update tasks set status = '$_POST[status]'
    where tid = $_GET[id]";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo "<script type='text/javascript'>
     alert('status updated successfully');
        window.location.href = 'user_dashboard.php'</script>";
    }else{
        echo "<script type='text/javascript'>
     alert('Error please try again');
        window.location.href = 'user_dashboard.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ETMS</title>
 <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
 <!--jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="row" id="header">
        <div class="col-md-12">
            <h3><i class="fa fa-solid fa-list" style="padding-right:15px";></i>Task Management System</h3>
        </div>
</div>
<div class="row">
    <div class="col=md-4 m-auto"style="color:white";><br>
        <h3 style="color:white">Update the task</h3><br>
        <?php 
        include "connection.php";
        $query = "select * from tasks where tid = $_GET[id]";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
        <form action="" method="post">
            <div class="form-group">
                <input type="hidden" name="id" class="form-control" value="required">
            </div>
            <div class="form-group">
                    <select class="form-control" name="status">
                        <option>-select-</option>
                        <option>In-progress</option>
                        <option>compelete</option>

                    </select>
        </div>
                    <input type="submit" class="btn btn-warning" name="update" value="update">
</form>
<?php
 } 
 ?>
</div>
</div>
    
</body>
</html>