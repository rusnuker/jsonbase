<?php
session_start();
?>
<html>
<head><link rel="shortcut icon" href="https://sun9-72.userapi.com/impg/xm8vlxfP-85MNtD3nrzsVeYJ2JwPEtnbxY076g/SV8ZgG8UKqk.jpg?size=1920x1920&quality=96&sign=89c050a5efb22acf6a566145e178ff76&type=album" type="image/png">
<title>
Беседы <?php echo $_SESSION['name']; ?>
</title>
<meta charset = "utf-8" />
</head>
<body>
<center>
<div class = 'dialogs'>
<?php
      function WatchDialog()
	  {
  if(isset($_GET['chat']))
  {      
   
echo"<br><hr></hr><div class='user_dial'>".file_get_contents($_SESSION['name']."-"."dialog/".$_SESSION['name']."-".$_GET['chat']."dialog.txt").'"'."(".file_get_contents($_SESSION['name']. '-' ."dialog/id/"."id.txt").")<hr></hr></div>";
   
   }
	  }
  if (!isset($_GET['chat']))
  {
	if ($handle = opendir($_SESSION['name']."-"."dialog/")) {
    while (false !== ($file = readdir($handle))) { 
        if ($file != "." && $file != ".."&&$file != "id") { 
       $info = pathinfo($file);
       echo  '<form action ="conversation"method = "get"><input type ="submit"  size ="5px" style = "font-weight:bold; width:100%; border:1px solid white;" name = "chat"value =' .file_get_contents($_SESSION['name']."-"."dialog/".$info['filename'].'.txt').'""';
    }
     
}
  }
  }
?>
<?php
if (!isset($_SESSION['name']))
{
	echo'<script> location.href = "login.php"</script>';
}
?>

</div>
</center>
<style>
.dialogs{
	width:300px;
	height:100%;
	overflow:auto;
	border:1px solid black;
}
.user_dial:hover
{
	background:gray;
	cursor:pointer;
}
</style>