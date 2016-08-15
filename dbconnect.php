<?php
	$db_host = 'localhost';
    $db_username = 'mysql';
    $db_password = 'mysql';
    $db_name = 'index';
   
 
    $is_connected = @mysql_connect($db_host, $db_username, $db_password);
    $is_db_selected = $is_connected ? @mysql_select_db($db_name) : FALSE; 
?>