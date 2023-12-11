<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manage_task.php</title>
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
    <center><h3>All assigned Tasks</h3></center>
    <table class="table">
        <tr>
            <th>S.NO</th>
            <th>Task ID</th>
            <th>Description</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php 
        $sno = 1;
        $query = "select * from tasks";
        $query_run = mysqli_query($connection,$query);
        while($row = mysqli_fetch_assoc($query_run)){
            ?>
            <tr>
            <td><?php  echo $sno; ?></td>
            <td><?php  echo$row['tid']; ?></td>
            <td><?php  echo$row['description']; ?></td>
            <td><?php  echo$row['start_date']; ?></td>
            <td><?php  echo$row['end_date']; ?></td>
            <td><?php  echo$row['status']; ?></td>
            <td><a href="edit_task.php?id=<?php echo $row['tid'];?>">Edit</a> | <a href="delete_task.php?id=<?php echo$row['tid']; ?>">Delete</a></td>
        </tr>
            <?php
            $sno = $sno + 1;




        }
        ?>
    </table>

    
</body>
</html>