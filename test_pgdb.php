 <!DOCTYPE html>
<html>
<head>
<title>My file</title>
</head>

<body>
123
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "My PHP script!";

$dbconn = pg_connect("host=localhost port=5432 dbname=m25_dana user=dana_user password=rv456v");

if($dbconn) echo 'ok';
	else echo'error';

$result = pg_query($dbconn, "SELECT * FROM lavoretti");
if (!$result) {
  echo "An error occurred.\n";
}

echo "<pre>";
print_r(pg_fetch_all($result));
echo "</pre>";

?>

</body>
</html> 