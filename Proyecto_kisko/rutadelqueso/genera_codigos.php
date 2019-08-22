<?php
	include('conn.php');

$estatus = 0;
$cartilla = 0;
		 
for( $i=1; $i<=300001; $i++ )

{
		$set='123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$code=substr(str_shuffle($set), 0, 6);
		//echo $code;
		//echo "<br>";
		
        //echo $i;
        //echo "<br>";

		
		mysqli_query($conn,"insert into Codigos (Id, Id_cartilla, Codigo, Estatus) values ('$i', '$cartilla', '$code', '$estatus')");	
		$uid=mysqli_insert_id($conn);
}


	
		




?>