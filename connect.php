<?php
$dbhost = "localhost"; 
$dbusername = "root"; 
$dbpass = ""; 
$dbname = "test";

$dbconnect = @mysql_connect ($dbhost, $dbusername, $dbpass); 
mysql_select_db($dbname);
if (!$dbconnect) { echo ("�� ���� ������������ � ������� ���� ������!"); }

?>
