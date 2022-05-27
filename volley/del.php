<?php
print_r($id);die;														
require 'connect1.php';											
if(isset($_GET['id']))
{
														
	$id=$_GET['id'];
	try 
	{
													
	$sql = "DELETE FROM new_table WHERE `id`=:id";					
	$stmt = $con->prepare($sql);							
	$stmt -> bindvalue(':ID',$id,PDO::PARAM_INT);
	if($stmt -> execute())
	{
		header("location:test.php");
	}
	
	catch(PDOException $e)
	{
		echo 'ERROOOOOOOR'. $e->getmessage();
	}	

}
?>
