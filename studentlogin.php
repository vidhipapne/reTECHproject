<!DOCTYPE html>
<html>

<body>
<?php 

 $email=$_POST['email'];
 $password=$_POST['Password'];

 $conn= mysqli_connect('localhost','root','','college_db');
 
 if(!$conn){
 	          die("connection failed:".mysqli_connect_error());
            }
              echo "connected successfully";

 echo"<br>"; 
 echo"<br>";

$sql =("SELECT email, password FROM student_login WHERE email= '$email' AND 
  password='$password'");
$result=$conn->query($sql);
 if ($result->num_rows > 0){           

    while($row = $result->fetch_assoc()) {
      $pass=$row["password"] ;
      if($pass==$password){
      echo   "Successfully logged in";
       
  }
}  
   }
 
 else
 echo "login failed";
?>
<br> <br>
<a href="answer.html">Assignment</a>
</body>
</html>
