
<?php include "db.php"; ?>


<?php

function showData(){
    global $connection;
$query = "SELECT * FROM students ";

$result = mysqli_query($connection, $query);
 if(!$result) {
     die('Query FAILED' . mysqli_error($connection));
 
 } else {
 
 echo "Record Create"; 
 
 }


 while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
  echo  "<option value='$id'>$id </option>";
}

}

        function UpdateTable(){
            if(isset($_POST['submit'])) {
            global $connection;
    $username =  $_POST['username'];
    $course =   $_POST['course'];
    $depart = $_POST['department'];
    $gender =  $_POST['gender'];
    $reg =  $_POST['reg'];
    $grade =  $_POST['grade'];
    $age =   $_POST['age'];
    $email =  $_POST['email'];
    $id = $_POST['id'];


    $query = "UPDATE students SET ";
    $query .= "username = '$username', ";
    $query .= "course = '$course', ";
    $query .= "department = '$depart', ";
    $query .= "gender = '$gender', ";
    $query .= "reg = '$reg', ";
    $query .= "grade = '$grade', ";
    $query .= "age =  $age, ";
    $query .= "email = '$email', ";
    $query .= "WHERE id = $id";
   
    $result = mysqli_query($connection ,$query);

    if(!$result) {
    
        die("QUERY FAILED" . mysqli_error($connection));    
       }else {
       
       echo "Record Updated"; 
       
        }
    }

        
        }
        function createRows() {

            if(isset($_POST['submit'])) {
            global $connection;
                
            $username = $_POST['username'];
            $password = $_POST['password'];
                // we use this to prevent SQL INJENTION BY HACKERS
            $username =  mysqli_real_escape_string($connection,$username);
            $password =  mysqli_real_escape_string($connection,$password);
                
                $query = "INSERT INTO users(username,password) ";
                $query .= "VALUES ('$username', '$password')";
                
               $result = mysqli_query($connection, $query);
                if(!$result) {
                    die('Query FAILED' . mysqli_error($connection));
                
                } else {
                
                echo "Record Create"; 
                
                }
                
                
              
            }
            
            
            }