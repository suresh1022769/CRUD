<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>  </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head> 
<style>
body 
{
  background-color: pink;
}

div{
  color: blue;
  text-align: left;
}

div {
  font-family: monospace;
  font-size: 15px;
}

</style>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<hr />
</div>
</div>
	<form action="inserttdemoo.php" method="POST">
	<div class="row">
	<div class="col-md-3"> First name <br>
	<input type="text" name="firstname" value="" /><br><br>
	</div>
	<div class="col-md-3"> Last name<br>
	<input type="text" name="lastname" value="" /><br><br>
	</div>
	<div class="col-md-3"> Email<br>
	<input type="text" name="email" value="" /><br><br>
	</div>
	<div class="col-md-3"> Cell no<br>
	<input type="number" name="cellno" value="" /><br><br>
	</div>
	<input type="submit" name="submit" value="submit" style = "position:relative; left:1010px; top:2px;"/><br><br>
	</div>
	</form>

  <?php 
  include("connect1.php");
  
   if(isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $cellno = $_POST['cellno'];

    try {
      $pdoquery = "INSERT INTO new_table (firstname,lastname,email,cellno) VALUES(?, ?, ?, ?)";
      $pdoquery_run = $dbh->prepare($pdoquery);
      $pdoquery_run->execute([$firstname, $lastname, $email, $cellno]);
  
      echo "data inserted into database";
    }
    catch (Exception $e) {
      echo "not inserted";
    }
  }
  ?>

</body>
</html>
