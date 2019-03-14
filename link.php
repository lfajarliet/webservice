<?php
$server = "localhost";
$user = "id8973518_fajar";
$pass = "manda";
$db = "id8973518_akademik";
$konek = mysqli_connect($server, $user, $pass, $db);
if (!$konek)
{
die('Could not connect: ' . mysql_error());
}
?>