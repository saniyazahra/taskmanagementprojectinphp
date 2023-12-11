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
    <center><h3>Your Leave Application</h3></center><br>
    <table class="table" style="background-color:whitesmoke;width:75vw">
    <tr>
        <th>S.NO</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Status</th>
    </tr>
    <?php 
    $sno = 1;
    $query = "select * from leaves where uid = $_SESSION[uid]";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
?>
<tr>
    <td><?php echo $sno; ?></td>
    <td><?php echo $row['subject'] ;?></td>
    <td><?php echo $row['message']; ?></td>
    <td><?php echo $row['status']; ?></td>
</tr>
<?php
$sno = $sno + 1;
    }
    ?>

    </table>
    
</body>
</html>