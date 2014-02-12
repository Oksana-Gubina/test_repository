<?php
if (isset($_POST["Add"]) && ($_POST["Add"]== true))
{
echo "ggg";
}
?>
<?php
include ("connect.php");
include ('header.html');
$zero = 0;
$res = mysql_query("SELECT * FROM `articles` WHERE id_parent = ".$zero."");
$category = array(); 
 while($row = mysql_fetch_assoc($res))
            $category[] = $row;
$count = count($category);
?>
	<Form Name="listCat" action = "updateDate.php" method = "POST">	
	<table><tbody>	
<input type = 'checkbox' id= 'main_check' name = 'cb[]' onchange = 'selAll()' />
<input type = 'submit' name = 'del' value = 'delete'/>
<input type = 'submit' name = 'add' value = 'AddCat'/>

<?php
for ($i= 0; $i< $count; $i++)
{?>
<tr>
	<td><input type = 'hidden' id = 'hidden1' value = '<?php echo $category[$i]['id']?>'/></td>
	<td><input type = 'button' id = 'edit' value = 'ok'  onClick = 'javascript:somefunc(this)' /></td>
	<td> <a href ='articles.php?id=<?php echo $category[$i]['id']?>'> <?php echo $category[$i]['name']?></a> </td>
	<td><input type = 'checkbox' class = "check " name = 'cb[]' value = '<?php echo $category[$i]['id']?> '/></br></td>
</tr>
<?php } ?>
	</tbody></table></Form>
	<div id = 'idCat'>
	</div>
	</body>
	</html>

