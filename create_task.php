<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h3>create a new task</h3>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="form-group">
                    <label>Select User:</label>
                    <select class="form-control" name="id">
                        <option>-Select-</option>
                        <?php
                        include "connection.php";
                        $query = "select uid,name from users";
                        $query_run = mysqli_query($connection,$query);
                        if(mysqli_num_rows($query_run)){
                        while($row =  mysqli_fetch_assoc($query_run)){
                            ?>
                            <option value="<?php echo $row['uid'];  ?>"> <?php  echo $row['name'];?></option>
                            <?php
                        }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" rows="3" cols="50" name="description" placeholder="Mention the task"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Start date:</label>
                        <input type="date" class="form-control" name="start_date">
                    </div>
                    <div class="form-group">
                        <label>End date:</label>
                        <input type="date" class="form-control" name="end_date">
                    </div>
                    <input type="submit" class="btn btn-warning" name="create_task" value="create">
                
            </form>
        </div>
    </div>
</body>
</html>