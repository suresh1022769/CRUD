<?php
	// If user press update button on FORM INPUT
	if(isset($_POST['EDIT']))
	{
		// Catch data from FORM INPUT
		$id		= $_POST['id'];
		$firstname	= $_POST['firstname'];
		$lastname	= $_POST['lastname'];
		$email		= $_POST['email'];
		$cellno	= $_POST['cellno'];

		// Declare PDO prepare statement with update query
		$pdoquery_run	= $dbh->prepare('UPDATE new_table SET firstname = :firstname, lastname = :lastname, email = :email, cellno = :cellno WHERE id = :id');
		
		// Set data query match with data that send from FORM INPUT
		$data	= [':id'=>$id, ':firstname'=>$firstname, ':lastname'=>$lastname, ':cellno'=>$cellno];
		
		// Execute PDO
		$pdoquery_run->execute($data); 
	} 
	else 
	{
		// Catch data from URL
		$id = $_GET['id'];

		// Declare PDO prepare statement to select / find data with ID
		$pdoquery_run = $dbh->prepare('SELECT * FROM new_table WHERE id = :id');
		$data = [':id'=>$id];

		// Execute PDO
		$pdoquery_run->execute($data);

		// Fetch the result of query to use 
		$result = $pdoquery_run->fetch(PDO::FETCH_OBJ);
	}
?>
