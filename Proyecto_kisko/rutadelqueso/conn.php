<?php

$conn = mysqli_connect("localhost","dadacom_rutaques","rutaKioskoQueso2019Sept","dadacom_rutadelqueso", 3306);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>