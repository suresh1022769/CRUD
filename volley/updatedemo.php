 if(isset($_POST['update_user_btn'])) 
   {
    	$id = $_POST['id'];
    	$firstname = $_POST['firstname'];
    	$lastname = $_POST['lastname'];
    	$email = $_POST['email'];
    	$cellno = $_POST['cellno'];
    	
    	try
    	{
    		$query = "UPDATE new_table SET firstname=:firstname,lastname=:lastname,email=:email,cellno=:cellno WHERE id=:id LIMIT 1";
    		$pdoquery_run = $dbh->prepare($query);
    		$data = 
    		[
    			':firstname' => $firstname,
    			':lastname' => $lastname,
    			':email' => $email,
    			':cellno' => $cellno,
    			':id' => $id,
    		];
    		$query_execute = $pdoquery_run -> execute($data);
    		
    		if($query_execute)
    		{
    			echo "Updated";
    		}
    		else
    		{
    			echo "not updated";
    		}
    		
    	}
    	catch (PDOException $e)
    	{
    		echo $e ->getmessage();
   }
   
