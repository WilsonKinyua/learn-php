<?php include "db.php";

    if(isset($_POST['submit'])){
      $username =  $_POST['username'];
      $course =   $_POST['course'];
      $depart = $_POST['department'];
      $gender =  $_POST['gender'];
      $reg =  $_POST['reg'];
      $grade =  $_POST['grade'];
      $age =   $_POST['age'];
      $email =  $_POST['email'];

     
    $query = "INSERT INTO students(fullName,course,department,gender,regNo,grade,age,email) ";
    $query .= "VALUES ('$username', '$course', '$depart','$gender','$reg','$grade',$age,'email')";
    
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error($connection));
    
    } else {
    
    echo "Record Create"; 
    
    }
            $username = mysqli_real_escape_string($connection, $username );   
            $password = mysqli_real_escape_string($connection, $password );
            

            $hashFormat = "$2y$10$"; 
            $salt = "iusesomecrazystrings22";
            $hashF_and_salt = $hashFormat . $salt;
            $password = crypt($password,$hashF_and_salt);   
    };

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    
    <div class="col-sm-6">
        <h2 class="text-center">Student Details</h2>
     <form action="school_update.php" method="post">
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
            
            
                                   <input class="btn btn-secondary btn-lg" type="submit" name="submit" value="submit">
            
        </form>
    
     </div>
    </div>



                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>