<?php
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','xcube');
define('DB_PASS','xcube');
define('DB_NAME','test_db');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS);
//echo "successfull";
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
