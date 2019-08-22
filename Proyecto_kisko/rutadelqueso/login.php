<?php
	include('conn.php');
	session_start();
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}

		$email=check_input($_POST['email']);
//		$password=md5(check_input($_POST['password']));


		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			$_SESSION['log_msg'] = "Invalid email format";
  			header('location:ingreso.php');
		}
		else{
			$query=mysqli_query($conn,"select * from usuarios where Email='$email'");
			
			if(mysqli_num_rows($query)==0){
				$_SESSION['log_msg'] = "Participante no registrado";
  				header('location:registrate.php');
			}
			else{
				$row=mysqli_fetch_array($query);
				if($row['verify']==0){
					$_SESSION['log_msg'] = "User no verificado. Por favor active su cuenta.";
  					header('location:ingreso.php');
				}
				else{
				$query1=mysqli_query($conn,"select Id from usuarios where Email='$email'");
				$row1=mysqli_fetch_array($query1);
                echo $row1['Id'];


					$_SESSION['id']=$row['Id'];
					header('location:llena_tu_cartilla.php?id='.$row1['Id'].'');
				}
			}
		}

	}
?>