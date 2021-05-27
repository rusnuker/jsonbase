<?php
session_start();
?>
<html>
<head>
<meta charset = "utf-8"/>
<link rel="shortcut icon" href="https://sun9-72.userapi.com/impg/xm8vlxfP-85MNtD3nrzsVeYJ2JwPEtnbxY076g/SV8ZgG8UKqk.jpg?size=1920x1920&quality=96&sign=89c050a5efb22acf6a566145e178ff76&type=album" type="image/png">
<title>
Регистрация
</title>
<style>
.form{
	border:2px solid black;
	width:200px;
	height:100px;
}
</style>
</head>
<body>
<form action = "" method = "post">
<center>
<div class = "form">
<input type  ="name" placeholder ="Введите имя" name = "name"><br>

<input type = "submit" value = "Войти">
</div>
</center>
<?php
if (isset($_POST['name']))
{
	$_SESSION['name']= $_POST['name'];
	
	file_put_contents("users_database_jsonbase-chat/".$_SESSION['name'].".txt",'name:'.$_SESSION['name'].' \n success:true');
	
	echo "<script> location.href = 'index';</script>";
}
?>
</body>

</html>