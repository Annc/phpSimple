<?php
include('conn.php');
$username = $_POST['username'];
$passwd = $_POST['password'];
echo $username;
echo $passwd;
$query = "INSERT INTO userdata (username, passwd)VALUES ('$username', '$passwd')";
//$query = "select * from userdata";
echo $query;
$result = mysql_query($query, $dbc)
	or die(mysql_error());
mysql_close($dbc);
?>

