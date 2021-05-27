<?php
$d = opendir('bots/anket/');//открываем папку
$filelist = array();
while ($filename=readdir($d)) {
if ($filename!='.' && $filename!='..') {
$filelist[]=$filename;}
}
closedir ($d);
$rand = array_rand($filelist);
$_SESSION['path_bot'] = $filelist[$rand];
echo '<meta charset = "utf-8"/>'. @file_get_contents("bots/anket/".$filelist[$rand]); //открываем рандомный файлик и выписываем его в API
?>