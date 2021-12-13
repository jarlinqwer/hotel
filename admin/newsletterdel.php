<?php

include ('db.php');

$id=$_GET['eid'];
if($id=="")
{
echo '<script>alert("Disculpa ! Entrada Incorrecta") </script>' ;
		header("Location: messages.php");


}

else{
$view="DELETE FROM `contact` WHERE id ='$id' ";

	if($re = mysqli_query($con,$view))
	{
		echo '<script>alert("Remover subscripcion al boletin informativo") </script>' ;
		header("Location: messages.php");
	}


}







?>