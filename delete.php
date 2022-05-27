<?php
require_once'connect1.php';
$id=$_GET['id'];
$pdoquery = "DELETE FROM new_table WHERE id= :id";
$pdoquery_run = $dbh->prepare($pdoquery);  //echo $pdoquery; die;
$data= [':id'=> $id];                      //echo $pdoquery_run; die;
$query_execute = $pdoquery_run->execute($data);
   
    if($query_execute)
    {
    	echo "Deleted";
    	
    }
    else
    {
    	echo "Not Deleted";
    }
?>


