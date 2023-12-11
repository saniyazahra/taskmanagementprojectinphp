<?php
include 'connection.php';
if(isset($_POST['userregistration']))
{
    $query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile])";
    $query_run = mysqli_query($connection,$query);
    if($query_run){
        echo "<script type='text/javascript'> alert('user registerd successfully');
        window.location.href = 'index.php'</script>";
    }else{
        echo "<script type='text/javascript'> alert('Error');
        window.location.href = 'register.php'</script>";
    
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TMS register page</title>
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
        <div class="col-md-3 m-auto" id="register_home_page">
            <center><h3 style="background-color: #5a8f7b;padding:5px;width:15vw;">User Registration</h3></center>
            <form action="" method="post">
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
    </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
    </div>
    <div class="form-group">
    <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
    </div>
    <form action="" method="post">
                <div class="form-group">
                    <input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile Number" required>
    </div>
   <center> <div class="form-group">
        <input type="submit" name="userregistration" value="Register" class="btn btn-warning">
</div>
    </form>
    <a href="index.php" class="btn btn-danger">Go To Home </a></center>

        </div>
    </div>
   
</body>
</html>