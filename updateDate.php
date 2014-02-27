<?php
header("location: http://localhost/www/index.php");	
?>
<?php 
include ('connect.php');
if (isset($_POST["del"]) && ($_POST["del"]== true))
	{
	$cb = array();
	$cb = $_POST['cb'];

		foreach ($cb as $value )
		{	
		echo $value;
		mysql_query("DELETE FROM `articles` WHERE id = ".$value."");
		}
	}

if (isset($_POST["editCat"]) && ($_POST["editCat"]== true))
	{
	$id = $_POST['idCat'];
	$nameCat = $_POST['NameCat'];
	mysql_query("UPDATE `articles` SET `name`='".$nameCat."' WHERE id = ".$id."");  
	}
	
?>

