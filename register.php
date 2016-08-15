<?php
require_once("dbconnect.php");

	if(isset($_POST["r_Name"]))	
		$r_Name = $_POST["r_Name"]; 
	if(isset($_POST["r_Login"])) 
		$r_Login = $_POST["r_Login"]; 
	if(isset($_POST["r_Pass"]))
		$r_Pass = ($_POST["r_Pass"]); 
	if(isset($_POST["r_send"]))
		$r_send = $_POST["r_send"]; 
	
	if(isset($r_send)){
		$query = "INSERT INTO users(Name,Login,Pass) VALUES('$r_Name','$r_Login','$r_Pass')";
		$result = mysql_query($query) or die ( "Error : ".mysql_error() ); 
		
			if($result)
			{
				echo"Регистрация прошла успешно! <a href='index.php'>Перейти на главную страницу.</a> ";
				exit();
			}
	}
	echo"хуй";
?>