<?php
session_start();
include 'connection.php';
if(isset($_POST['userlogin']))
{
    $query = "select email,password,name,uid from  users where email =  '$_POST[email]' AND password = '$_POST[password]'";
    $query_run = mysqli_query($connection,$query);
    if(mysqli_num_rows($query_run)){
while($row = mysqli_fetch_assoc($query_run)){
    $_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['uid'] = $row['uid'];
}
        echo "<script type='text/javascript'>
        window.location.href = 'user_dashboard.php'</script>";

    }
    else{
        echo "<script type='text/javascript'> alert('please enter correct details');
        window.location.href = 'user_login.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS user login</title>
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
    <div class="row">
        <div class="col-md-3 m-auto" id="login_home_page">
            <center><h3 style="background-color: #5a8f7b;padding:5px;width:15vw;">User Login</h3></center>
            <form action="" method="post">
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
    </div>
    <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
    </div>
   <center> <div class="form-group">
        <input type="submit" name="userlogin" value="Login" class="btn btn-warning">
</div>
    </form>
    <a href="index.php" class="btn btn-danger">Go To Home </a></center>

        </div>
    </div>
   
</body>
</html>