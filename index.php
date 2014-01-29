<?php

	include("connect.php");
	
	
	
	$p = (isset($_REQUEST['page']))?$_REQUEST['page']-1:0;
	
	$query = "SELECT * FROM `users`";
	$q = "SELECT COUNT(*) FROM `users`";
	if(isset($_REQUEST['search']) && !empty($_REQUEST['search']))
	{
		$query .= " WHERE `fname` LIKE '%".$_REQUEST['search']."%' OR `lname` LIKE '%".$_REQUEST['search']."%' OR `email` LIKE '%".$_REQUEST['search']."%'";
		$q.= " WHERE `fname` LIKE '%".$_REQUEST['search']."%' OR `lname` LIKE '%".$_REQUEST['search']."%' OR `email` LIKE '%".$_REQUEST['search']."%'";
	}
	$count = mysql_result(mysql_query($q), 0);
	if(isset($_REQUEST['sort']))
	{
		switch($_REQUEST['sort'])
		{
			case 'age':
			{
				if(isset($_REQUEST['order']))
				{
					switch($_REQUEST['order'])
					{
						case 'asc':
						{
							$query.=" ORDER BY `age` DESC";
							break;
						}
						case 'desc':
						{
							$query.=" ORDER BY `age` ASC";
							break;
						}
					}
				}
				break;
			}
			case 'alf':
			{
				if(isset($_REQUEST['order']))
				{
					switch($_REQUEST['order'])
					{
						case 'asc':
						{
							$query.=" ORDER BY `fname` ASC, `lname` ASC";
							break;
						}
						case 'desc':
						{
							$query.=" ORDER BY `fname` DESC, `lname` DESC";
							break;
						}
					}
				}
				break;
			}
		}
	}
	$query .= " LIMIT ".($p*7).",7";
	$res = mysql_query($query);
	
	$people = array();
	
	while($row = mysql_fetch_assoc($res))
		$people[] = $row;
		
	if(isset($_COOKIE['uid']) && isset($_COOKIE['sid']))
	{
	$uid = $_COOKIE['uid'];
	header("Location: profile.php?id=".$uid);}
	else include("regex.php");
	
	
	include("header.php");
?>
<?php
	include("footer.php");
?>