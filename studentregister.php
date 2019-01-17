
  <?php 

 $sname =$_POST['StudentName'];
 $email =$_POST['Email'];
 $sem =$_POST['sem'];
 $course =$_POST['course'];
 $college =$_POST['college'];
 $rollno=$_POST['RollNumber'];
 $password=$_POST['password'];

$servername = "localhost";
$username = "root";
$pass = "";
$db="college_db";
$conn = mysqli_connect($servername, $username, $pass,$db);

if (!$conn) {
    die("Connection failed: " . mysql_error());
} 
else
    echo "connected ";
 echo"<br>";


 $sql = "INSERT INTO student_detail(sname, rollNumber, email, sem, course, college,password)
  VALUES ('$sname', $rollno, ' $email',  '$sem', ' $course',  ' $college', '$password');";

 $command="INSERT INTO student_login(email ,password)
                        VALUES ('$email','$password');";


if ($conn->query($command) === TRUE) {
        echo "New record created successfully in student login";
        echo "<br><br>";
  
        }
        else {
                echo "Error: " . $sql . "<br>" . $conn->error;
             }


if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo "<br><br>";
  
        }
        else {
                echo "Error: " . $sql . "<br>" . $conn->error;
             }

?>

<html> 
<body> 
  <a href="answer.html"> Assignment </a>
</body>
</html>