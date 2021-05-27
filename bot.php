<?php session_start();
?><html>
<head><link rel="shortcut icon" href="https://sun9-72.userapi.com/impg/xm8vlxfP-85MNtD3nrzsVeYJ2JwPEtnbxY076g/SV8ZgG8UKqk.jpg?size=1920x1920&quality=96&sign=89c050a5efb22acf6a566145e178ff76&type=album" type="image/png">
<meta charset = 'utf-8'/>
<title>
Бот-знакомств JSONBase
</title>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>$(function () {
	$( "#drag").draggable();
    $('#drag').dialog({
		autoOpen: false
		
	});
	
	$('img').button().click(function(e) {
        $('#drag').dialog("open")
    });
			
});
</script>
</head>
<body>
<style>
.chat_list
{
border:2px solid gray;
background:	#ffcf94;
overflow:auto;
width:300px;
height:50%;	
}
.button
{
	background:#19ff19;
	width:150px;
	border-radius:20px;
	border:1px solid #19ff19;
}
.button-1
{
	background:#ff2400;
	width:150px;
	border-radius:20px;
	border:1px solid #ff2400;
}
#drag
{
	background:orange;width:300px; height :30px;
}
</style>
<div style ='width:100%;border:1px solid black; height:20px;'>
<img src ='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%2013%2013%22%3E%3Cpath%20stroke=%22hsl(155,0%,50%)%22%20fill=%22none%22%20stroke-linecap=%22round%22%20d=%22M10.3%207.5l.2.2c.6.6.5%201.5-.5%201.6h-7c-1%200-1.1-.95-.5-1.6%201-1%201-1%201-1.7-.1-1.4%200-3%201.4-3.9m0%207.5c.3%201.8%202.9%201.8%203.2%200%22/%3E%3C/svg%3E' width = '24px' height ='24px;'></img>
</div>

<center>
<div id = 'drag' >
<div id ='dialog' width = '300px' height = '300px' style ='margin:-310px; padding:-300px;'>
<iframe src = 'notifications' width = '300px' height = '300px'></iframe>
</div>
</div>
<div class = 'chat_list'>
<?php
if (isset($_POST['like']) || isset($_POST['dis']))
{
	
$d = opendir('bots/anket/');
$filelist = array();
while ($filename=readdir($d)) {
if ($filename!='.' && $filename!='..') {
$filelist[]=$filename;}
}
closedir ($d);
$rand = array_rand($filelist);
$_SESSION['path_bot'] = $filelist[$rand];
echo ' Смотри кого я нашел:<br>'.@file_get_contents("bots/anket/".$filelist[$rand]);
}
?>
</div>

<br>
<form action='' method = 'post'>
<div class = 'chatbar'>
<button class = 'button' name = 'like' title = 'Like'><img class="emoji" src="https://vk.com/emoji/e/e29da4.png" alt="❤"> </img></button>

<button class = 'button' name = 'send'title = "Отправить сообщение"><img class="emoji" src="https://vk.com//emoji/e/f09f928c.png" > </img></button>

<button class = 'button-1' name = 'dis' title 'Пропустить анкету' name = 'dis'><img src = 'https://vk.com/emoji/e/f09f918ef09f8fbb.png'></img></button><br>
<?php
if (isset($_POST['message']) && isset($_POST['sender']))
{
	$text = file_get_contents ("notification/".$_POST['sender'].'.txt');
	$text .= $_SESSION['bot_name'].' отправил вам сообщение:'.$_POST['message']. '<br>';
	file_put_contents("notification/".$_POST['sender'].'.txt',$text);
	
}
?>

<?php
if (isset($_POST['send']))
{
	echo '<input type ="text" name="message" placeholder="Введите сообщение"><br> <input type ="submit" value = "Отправить">' .'<input id ="adress" type ="hidden" name = "sender" value ='.file_get_contents("bots/anket/name/".$_SESSION['path_bot']). '>';
}?>
</div>
</form>
</center>
<?php
if (!isset($_SESSION['bot_name']) && !isset($_SESSION['bot_text']))
{
echo 'Впервые в боте?<a href ="anket"> зарегистрируйте анкету</a><br>';
}
?>
<?php
if (isset($_SESSION['bot_name']))
{
	echo 'ваш ник в боте:'.$_SESSION['bot_name'];
}
?>	<br>
<form action = '' method = 'post'>
<input type = 'submit' name ='delete' class='button'value = 'Удалить аккаунт в боте'>
<?php
if (isset($_POST['delete']))
{
	@unlink("bots/anket/".$_SESSION['bot_name'].'.txt');
	session_destroy();
	echo'<script> window.reload();</script>
	';
}
?>
</form>
<script>
var text = document.createElement('p');
text.innerHTML = 'перетащи меня'
document.getElementById('drag').appendChild(text);
</script>
<br><br>
<a href = 'dev'>Разработчикам </a>
