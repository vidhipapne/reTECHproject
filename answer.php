
   
  <?php
	
	$qid=$_POST['qid'];
	$answer=$_POST['answer'];

	$server='localhost';
	$username='root';
	$password='';
	$db='college_db';

	$conn=mysqli_connect($server,$username,$password,$db);
	if(!$conn){
		echo "connection not possible at the moment";
	}else{
		echo "connected";
	}
	
	echo "<br>";
	$sql="insert into answer values ('".$qid."','".$answer."');";
	

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo "<br><br>";
         echo "Your answer is recorded";
	
        }
        else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
             }


?>

