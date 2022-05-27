<!DOCTYPE html>
<html>
<body>
<?php
	$age="";
?>
<form>
	AGE:<input type="age" name="age"><br><br>
	<input type="submit" value="submit"><br><br>
</form>
    
<?php
	$age="";
	if($age>=18)
	{
		echo"the person is adult";
	}
	else
	{
		echo "the person is minor";
	}
?>

</body>
</html>

