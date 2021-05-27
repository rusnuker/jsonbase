<?php session_start();?><html>

<head><link rel="shortcut icon" href="https://sun9-72.userapi.com/impg/xm8vlxfP-85MNtD3nrzsVeYJ2JwPEtnbxY076g/SV8ZgG8UKqk.jpg?size=1920x1920&quality=96&sign=89c050a5efb22acf6a566145e178ff76&type=album" type="image/png">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta charset ='utf-8'/>
<title>
Заполнение анкеты
</title>
</head><body>
<center>
<form action = '' method ='post' >

<?php
if(isset($_POST['submit']))
{
	
echo "<input type = 'text' name= 'name' placeholder = 'Введите анкетное имя'><br><textarea name='anket' placeholder = 'Введите анкету(указав возраст)'></textarea><br>";
}
if(isset( $_POST['anket'] )&& isset($_POST['anket'] ))
{
	$_SESSION['bot_text']=$_POST['anket'];
	$_SESSION['bot_name']=$_POST['name'];
	file_put_contents('bots'.'/anket/'.$_POST['name'].'.txt',$_POST['name'].': ' .$_POST['anket']);
	file_put_contents('bots'.'/anket/name/'.$_POST['name'].'.txt',$_POST['name']);
	
}
if(isset($_SESSION['bot_name']) && isset($_SESSION['bot_text']))
{
	echo "<script>location.href='bot.php';</script>";
}
?>
<input type = 'submit' name ='submit' value = 'Приступить'>
</form>
</center>


</body>