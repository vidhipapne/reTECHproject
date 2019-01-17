<?php 

	$server = "localhost" ;
	$db = "college_db" ;
	$user = "root" ;
	$pass = "" ;

	$tname = $_POST['tname'];
	$email = $_POST['email'];
	$dept = $_POST['dept'];
    $password= $_POST['password'];

	$conn = mysqli_connect($server, $user, $pass, $db);
	if (!$conn) {
  	  die("Connection failed: " .mysql_error());
	} 
	else 
	{
		echo "connected";
	}
    echo "<br>";

   $sql = "INSERT INTO teacher_detail(tname, email, dept,password)
            VALUES ('$tname', '$email', ' $dept','$password');";
    
	if ($conn->query($sql) === TRUE) {
 	   echo "You are successfully registered";
	}
         else {
                 echo "Error: " . $sql . "<br>" . $conn->error;
           }
	echo "<br>";

	$comm= "INSERT INTO teacher_login (email,password) VALUES ('$email','$password');";

	if ($conn->query($comm) === TRUE) {
 	   echo "You are successfully registered in teacher login";
	}
         else {
                 echo "Error: " . $sql . "<br>" . $conn->error;
           }
echo "<br>";
?>
<html> 
<body>
	 <a href="question.html"> Assignment </a>
	</body>
	</html>




