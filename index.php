<?php
session_start(); 
require_once("dbconnect.php"); 
?>
<!DOCTYPE html>
<html>

<head>
</head>

<body>

<form action="register.php" method="post" name="r_form" >
	<table>
	<tr>
	<td> ���: </td>
	<td> <input type="text" name="r_Name" required=" " /> </td>
	</tr>
	<tr>
	<td> �����: </td>
	<td> <input type="text" name="r_Login" required=" " /> </td>
	</tr>
	<tr>
	<td> ������: </td>
	<td> <input type="password" name="r_Pass" required=" " /> </td>
	</tr>
	<tr>
	<td colspan="2"> <input type="submit" name="r_send" value="�����������������!" /> </td>
	</tr>
 </table>
 


</form> 
</body>

</html>