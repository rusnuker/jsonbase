<?php
if (isset($_GET['name']) && isset($_GET['anket']))
{
file_put_contents('bots'.'/anket/'.$_GET['name'].'.txt',$_GET['name'].': ' .$_GET['anket']);
	file_put_contents('bots'.'/anket/name/'.$_GET['name'].'.txt',$_GET['name']);	
}
?>