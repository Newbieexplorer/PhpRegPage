<?php
 session_start();
 require_once("dbconnect.php");

 if(isset($_POST["l_username"]))	
	 $l_username = $_POST["l_username"]; 
 if(isset($_POST["l_password"]))
	 $l_password = $_POST["l_password"];
 if(isset($_POST["l_send"])){ $l_send = $_POST["l_send"]; }


 if(isset($l_send)){

  $query = " SELECT * FROM users WHERE login = '$l_username' AND pass = '$l_password'";
  $result = mysql_query($query) or die ( "Error : ".mysql_error() );


if(mysql_num_rows($result) < 1){
echo "Неправильный логин или пароль. Нажмите <a href='index.php'>здесь</a> для того чтобы перейти на страницу авторизации";
}else{

$_SESSION['login'] = $l_username;
$_SESSION['pass'] = $l_password;


echo "Авторизация прошла успешно!";
}
}else{
echo "Вы зашли на эту страницу напрямую, поэтому нет данных для обработки. Вы можете возвращаться на <a href='index.php'> главную страницу </a>";
}
?>