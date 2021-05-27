<?php
if(isset($_GET['chat']) && isset($_GET['name']))
{
	if(!file_exists($_GET['chat']))
	{
		mkdir($_GET['name'].'-'.'dialog');
		mkdir($_GET['chat']);
		file_put_contents($_GET['name']."-"."dialog/". $_GET['name'].'-'.$_GET['chat'].'dialog.txt',$_GET['chat']);
		file_put_contents($_GET['chat']."/"."chat.txt",'');
	}
	
}
?>