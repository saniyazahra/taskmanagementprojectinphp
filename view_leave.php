
<?php
session_start();
include "connection.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h3>All Leave Applications</h3></center><br>
    <table class="table" style="background-color:whitesmoke;width:75vw">
    <tr>
        <th>S.NO</th>
        <th>User</th>
        <th>Subject</th>
        <th style="width:40%;">Message</th>
        <th>Status</th>
        <th>Action</th>

    </tr>
    <?php
    $sno = 1;
    $query = "select * from leaves";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <tr>
            <td><?php echo $sno; ?></td>
            <?php 
            $query1 = "select name from users where uid = $row[uid]";
            $query_run1 = mysqli_query($connection,$query1);
            while($row1 = mysqli_fetch_assoc($query_run1)){
                ?>
                <td><?php echo $row1['name'];  ?></td>
                <?php
            }
            ?>
            <td><?php  echo $row['subject'];?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><a href="approve_leave.php?id=<?php  echo $row['uid'];?>">Approve</a> | <a href="reject_leave.php?id=<?php echo $row['lid']; ?>">Reject</a></td>
        </tr>
        <?php
        $sno = $sno + 1;

    }
     ?>


    </table>
    
</body>
</html>