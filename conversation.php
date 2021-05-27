<?php
session_start();
?>
<html><head><meta charset ="utf-8"/><title><?php echo $_GET['chat'];?>
</title>
<link rel="shortcut icon" href="https://sun9-72.userapi.com/impg/xm8vlxfP-85MNtD3nrzsVeYJ2JwPEtnbxY076g/SV8ZgG8UKqk.jpg?size=1920x1920&quality=96&sign=89c050a5efb22acf6a566145e178ff76&type=album" type="image/png">
</title>

</head>
<body>
<div class = "chat">
<?php
if (isset($_POST['name'])&& isset($_POST['message']))
{
	if (file_exists($_SESSION['name']. '-' ."dialog"))
	{
	$id = file_get_contents($_SESSION['name']. '-' ."dialog/id/"."id.txt");
	$id = $id + 1;
	 file_put_contents($_SESSION['name']. '-' ."dialog/id/"."id.txt",$id);
$text =file_get_contents($_GET['chat']."/"."chat.txt");
$text.=$_POST['name'].":".$_POST['message']."\n";
file_put_contents($_GET['chat']."/"."chat.txt", $text);
echo file_get_contents($_GET['chat']."/"."chat.txt");
$_SESSION["name"]= $_POST["name"];
echo "<script>window.reload();</script>";
	}	
}
if (!isset($_POST['name'])&& !isset($_POST['message']))
{
	if (file_exists($_SESSION['name']. '-' ."dialog"))
	{
		
	echo file_get_contents($_GET['chat']."/"."chat.txt");}
}
?>
</div>
<style>
.chat{
border:2px solid gray;
background:	#ffcf94;
overflow:auto;
width:300px;
height:50%;
}
</style>
<?php
if (!file_exists($_SESSION['name']. '-' ."dialog"))
{
mkdir($_SESSION['name']. '-' ."dialog");	
mkdir($_SESSION['name']. '-' ."dialog/id");
file_put_contents($_SESSION['name']."-"."dialog/".$_SESSION['name']."-".$_GET['chat']."dialog.txt",$_GET['chat']."\n");
file_put_contents($_SESSION['name']. '-' ."dialog/id/"."id.txt","0");
}
if (file_exists($_SESSION['name']. '-' ."dialog"))
{
	file_put_contents($_SESSION['name']."-"."dialog/".$_SESSION['name']."-".$_GET['chat']."dialog.txt",$_GET['chat']."\n");
}
?>

<?php
if (file_exists($_SESSION['name']. '-' ."dialog/id/id.txt"))
{
	$id = file_get_contents($_SESSION['name']. '-' ."dialog/id/"."id.txt");
	$id = '0';
}
?>
<?php
if (isset($_GET['chat']))
{
	
		
	echo "<form action ='' method = 'post'><input type ='hidden' name ='name' value =".$_SESSION['name']."><br><input type = 'text' name ='message' placeholder ='Введите сообщение'><br><input type ='submit' value = 'Отправить'>";
	
}
?>

<?php
	if(!file_exists($_GET['chat']))
	{
		mkdir($_GET['chat']);
		echo"update this page<script>window.reload();</script>";
		
	
}



?>
<?php
if (!isset($_SESSION['name']))
{
	echo'<script> location.href = "login"</script>';
}
?>
<br>
<a href = 'dialog' target ='_blank'>Ваши диалоги</a>
<br>
<a href = 'dev'>Разработчикам </a>