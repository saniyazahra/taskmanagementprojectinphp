<?php

include "connection.php";
$query = "update leaves set status = 'Approved' where lid = $_GET[id]";
$query_run = mysqli_query($connection,$query);
if($query_run){
    echo "<script type='text/javascript'>
    alert('leave status updated successfully');
    window.location.href = 'admin_dashboard.php'</script>";
}
else{
    echo "<script type='text/javascript'> alert('please enter correct details');
    window.location.href = 'user_login.php'</script>";
}


?>