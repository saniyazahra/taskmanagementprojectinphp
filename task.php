<?php
session_start();
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task</title>
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
    <center><h3>Your Tasks</h3></center><br>
    <table class="table" style="background-color:whitesmoke;width:75vw;">
        <tr>
            <th>S.No</th>
            <th>Task Id</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php

        $query = "select * from tasks where uid = $_SESSION[uid]";
        $sno = 1;
        $query_run = mysqli_query($connection,$query);
        while($row =  mysqli_fetch_assoc($query_run)){
            ?>
            <tr>
                <td><?php echo $sno; ?></td>
                <td><?php echo $row['tid']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['start_date']; ?></td>
                <td><?php echo $row['end_date']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><a href="update_status.php?id=<?php echo $row['tid']; ?>">Update</a> </td>
            

        </tr>
        <?php
        $sno = $sno + 1;
        }

        ?>

    </table>
    
</body>
</html>