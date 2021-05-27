<?php
if (isset($_GET['chat']))
{
if (file_exists($_GET['chat'].'/chat.txt'))
	{
				echo '<meta charset ="utf-8"/>'.nl2br(file_get_contents($_GET['chat'].'/chat.txt'));
	}
	if (!file_exists($_GET['chat'].'/chat.txt'))
	{
		echo "<meta charset ='utf-8'/>Данная беседа отсутствует!";
	}
}
	if (!isset($_GET['chat']))
	{
	echo '<meta charset ="utf-8"/>Ошибка API.Проверьте введенные данные';	
	}

?>