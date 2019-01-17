<?php
	
	$servername = "localhost" ;
	$dbname = "college_db" ;
	$username = "root" ;
	$password = "" ;

	$course = $_POST['course'];
	$sem = $_POST['sem'];
	$question = $_POST['question'];


	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
  	  die("connection failed: " .mysql_error());
	} 
	else 
	{
		echo "connected";
	}
     echo "<br>";
 $sql="insert into question values ('".$sem."','".$course."','".$question."');";
		if($conn->query($sql) === TRUE){
		echo "Your question has been submitted";
	}

?>