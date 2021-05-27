<?php 
if (isset($_GET['chat'])&& isset($_GET['name'])&& isset($_GET['message']))
{
	if (file_exists($_GET['chat'].'/chat.txt'))
	{
		$text = file_get_contents($_GET['chat'].'/chat.txt');
		$text .= ' ' .$_GET['name'].':'.$_GET['message'];
		file_put_contents($_GET['chat'].'/chat.txt',$text);
	}
	if (!file_exists($_GET['chat'].'/chat.txt'))
	{
	echo '<meta charset ="utf-8"/>Данная беседа не существует!';	
	}
}
if (!isset($_GET['chat'])&& !isset($_GET['name'])&& !isset($_GET['message']))
{
	echo '<meta charset ="utf-8"/>Ошибка API.Проверьте введенные данные';
}
?>