<?php include "db.php"; ?>
<?php include "functions.php" ?>
<?php
if(isset($_POST['update'])){
    UpdateTable();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    
    <div class="col-sm-6">

    <h2 class="text-center">Student Details</h2>
     <form action="school_update_new.php" method="post">
            <div class="form-group">
            <label for="username">FullNames</label>
            <input type="text" name="username" class="form-control">
            </div>
                <div class="form-group">
                <label for="course">Course</label>
                <input type="text" name="course" class="form-control">
                </div>
                    <div class="form-group">
                    <label for="department">Department</label>
                    <input type="text" name="department" class="form-control">
                    </div>
                        <div class="form-group">
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" class="form-control">
                        </div>
                            <div class="form-group">
                            <label for="reg">RegNo</label>
                            <input type="text" name="reg" class="form-control">
                            </div>
                                <div class="form-group">
                                <label for="grade">Grade</label>
                                <input type="text" name="grade" class="form-control">
                                </div>
                                    <div class="form-group">
                                    <label for="age">Age</label>
                                    <input type="text" name="age" class="form-control">
                                    </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control">
                                            </div>
                                            <div class="form-group">

                                                <select name="" id="" >
                                                     <?php

                                                     showData();
                                                     ?>
                                                </select>
                                            </div>
                                    <input class="btn btn-secondary btn-lg" type="submit" name="submit" value="update">
            
        </form>
    
     
     </div>
    </div>



                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>