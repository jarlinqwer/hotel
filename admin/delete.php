<?php

include ('db.php');
$id=$_GET['sid'];

$view="DELETE FROM `roombook` WHERE id ='$id' ";
if($re = mysqli_query($con,$view))
	{
		echo '<script>alert("Se elimino correctamente :D") </script>' ;
		header("Location: home.php");
	}

