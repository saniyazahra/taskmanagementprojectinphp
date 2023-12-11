<?php
session_start();
include "connection.php";
if(isset($_POST['create_task'])){
$query = "insert into tasks values(null,$_POST[id],'$_POST[description]','$_POST[start_date]','$_POST[end_date]','Not Started')";
$query_run = mysqli_query($connection,$query);
if($query_run){
    echo "<script type='text/javascript'>
     alert('Task created successfully');
        window.location.href = 'admin_dashboard.php'</script>";
    }
    else{
        echo "<script type='text/javascript'> 
        alert('Please try again');
        window.location.href = 'admin_dashboard.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin dashboard</title>
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
            <div class="col-md-4" style="display: inline-block;">
                <h3>Task Management System</h3>
</div>
<div class="col-md-6" style="display: inline-block;text-align:right;">
    <b>Email:</b><?php  echo $_SESSION['email']; ?>
    <span style="margin-left:25px;"><b>Name:</b><?php  echo $_SESSION['name']; ?></span>
</div>
        </div>
    </div>
    <!----header codes end--->
    <div class="row">
        <div class="col-md-2" id="left_sidebar">
            <table class="table">
                <tr>
                    <td style="text-align:center;">
                        <a href="admin_dashboard.php"type="button" id="logout_link">Dashboard</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a href="create_task.php" type="button" class="link" id="create_task">Create Task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a href="manage_task.php"type="button" class="link" id="manage_task">Manage Task</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a href="view_leave.php"type="button" class="link" id="view_leave">Leave Applications</a>
                    </td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a href="logout.php"type="button" id="logout_link">Logout</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="col-md-10" id="right_sidebar">
            <h4>Instructation for Admin</h4>
            <ul style="line-height:3em; font-size:1.2em;list-style-type:none;">
                <li>1. All the employees should mark their attendence daily.</li>
                <li>2. Every one must compelete the task assign to them .</li>
                <li>3. kindly maintain your work daily. </li>
                <li>4. keep office you are neat and clean. </li>
            </ul>
        </div>
    </div>
</body>
</html>