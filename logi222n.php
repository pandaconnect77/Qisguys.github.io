<?php

	$email=$_POST['email'];
	$password=$_POST['password'];

	$con =new mysqli("localhost","root","","project")	;

	if ($con->connect_error) {
		die("failed to connetction".$con->connect_error) ;
		# code...
	}else{
		$stmt = $con->prepare("select * from login where email= ? ");
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt_result= $stmt->get_result();
		if ($stmt_result->num_rows>0) {
			$data=$stmt_result->fetch_assoc();
			if ($data['password']==$password) {
				echo "login sucessful ";
			}else{
				echo "indavli password";
			}
		}else{
			echo "<h2>invalid email</h2>";
		}
	}



		?>
