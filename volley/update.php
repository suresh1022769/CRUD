<?php 
include 'connect1.php';
?>
<!DOCTYPE html>
<html lang="en">
<head> 
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<hr />
</div>
</div>
<form name="inserttdemoo.php" method="post">
	<div class="row">
	<input type="hidden" name="id" value="<?= $result-> id; ?>"/>
	<div class="col-md-3"> First name <br>
	<input type="text" name="firstname" value="<?= $result-> firstname; ?>" class="form-control" ><br>
	</div>
	<div class="col-md-3"> Last name<br>
	<input type="text" name="lastname" value="<?= $result-> lastname; ?>" class="form-control" ><br>
	</div>
	<div class="col-md-3"> Email<br>
	<input type="email" name="email" value="<?= $result-> email; ?>" class="form-control" ><br>
	</div>
	<div class="col-md-3"> Cell no<br>
	<input type="text" name="cellno" value="<?= $result-> cellno; ?>" class="form-control" ><br>
	</div>
	<button type="submit" name="update_user_btn" class="btn btn-primary">Update</button>
	</div>
</div>
</form>

<?php //echo"<pre>";print_r($_POST);die;
  include("connect1.php");
  if (isset($_POST['update'])) 
  {
    $userid = intval($_GET['id']);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $cellno = $_POST['cellno'];

    if($firstname !="" && $lastname !=""&& $email !="" && $cellno !="")
    try {
      $pdoquery = "UPDATE 'new_table' SET 'firstname' =':firstname','lastname'=':lastname','email'=':email','cellno'=':cellno' WHERE id=:id";
      $pdoquery_run = $dbh->prepare($pdoquery);    //echo $pdoquery;die;
      $data= [':id'=> $id];
      $pdoquery_run->execute($data);
      $result = $pdoquery_run->fetch(PDO::FETCH_OBJ);
  
      echo "data updated";
    }
    catch (Exception $e) {
      echo "not inserted";
    }
  }
  ?>
</body>

</html>
