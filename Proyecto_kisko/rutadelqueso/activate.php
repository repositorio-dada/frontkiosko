<?php
	include('conn.php');
	session_start();
	if(isset($_GET['code'])){
	$user=$_GET['uid'];
	$code=$_GET['code'];

	$query=mysqli_query($conn,"select * from usuarios where Id='$user'");
	$row=mysqli_fetch_array($query);

	if($row['code']==$code){
		//activate account
		mysqli_query($conn,"update usuarios set verify='1' where Id='$user'");
				header('location:ingreso.php');
		?>
		<p>Account Verified!</p>
		<p><a href="ingreso.php">Ingresa</a></p>
		<?php
	}
	else{
		$_SESSION['sign_msg'] = "Something went wrong. Please sign up again.";
  		header('location:registrate.php');
	}
	}
	else{
		header('location:ingreso.php');
	}
?>