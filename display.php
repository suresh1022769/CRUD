<?php 
include 'connect1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<style>
body 
{
  background-color: pink;
}

th{
  color: blue;
  text-align: left;
}

th {
  font-family: monospace;
  font-size: 17px;
}

</style>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<hr />
</div>
</div>
<div class="card-body">
<table class="table table-bordered table-striped">	
<thead>
<tr>
	<th scope="col">Firstname</th>
	<th scope="col">Lastname</th>
	<th scope="col">Email</th>
	<th scope="col">Cellno</th>
	<th scope="col">Edit</th>
	<th scope="col">Delete</th>
</tr>
</thead>
<tbody>

<?php
$query="select * from new_table";
$pdoquery_run = $dbh->prepare($query); 											
$pdoquery_run->execute();                												
//echo $query;die;
$result=$pdoquery_run->fetchAll(PDO::FETCH_OBJ);
//echo "<pre>";print_r($result);die;
if($result)
{
//echo "<pre>";print_r($result);die;
	foreach($result as $row)
	{
		?>
		<tr>
		<td><?= $row->firstname; ?></td>
		<td><?= $row->lastname; ?></td>
		<td><?= $row->email; ?></td>
		<td><?= $row->cellno; ?></td>
		<td><a href="edit-display.php?id=<?php echo$row->id; ?>"><i class="fa-solid fa-pen"></i></a></td>
		<td><a href="delete.php?id=<?php echo$row->id; ?>"><i class="fa-solid fa-trash"></i></a></td>
		</tr>
		<?php
		
	}
}
else
{
	?>
	<tr>
		<td colspan="5">No Record Found</td>
	</tr>
	<?php
}
?>

