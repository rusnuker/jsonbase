<?php
session_start();
?>
<?php 
echo @file_get_contents('notification/'.$_SESSION['bot_name']. '.txt');
?>