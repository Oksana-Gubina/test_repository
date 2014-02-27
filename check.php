<?php
 header("location: http://localhost/www/index.php")
?>

<?php
include ("connect.php");
include("header.html");
$cb = array();
$cb = $_POST['cb'];

	foreach ($cb as $value )
		{	
		echo $value;
		mysql_query("DELETE FROM `articles` WHERE id = ".$value."");
		}
?>