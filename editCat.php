<?php
include ('connect.php');
$q = mysql_query("SELECT `name` FROM `articles` WHERE id = ".$_POST['id']."");
$name = mysql_result($q,0);

?>	
	
	<Form Name="Cat" action = "updateDate.php" method = "POST">	
	<input type = 'hidden' name= 'idCat' value = '<?php echo $_POST['id']?> '>
	<input type = 'text' name= 'NameCat' value = '<?php echo $name ?> '/>
	<input type = 'submit' name = 'editCat' value = 'Save' />
	</Form>




