 <?php
 if (isset($_GET['name']))
  {
	if ($handle = opendir($_GET['name']."-"."dialog/")) {
    while (false !== ($file = readdir($handle))) { 
        if ($file != "." && $file != ".."&&$file != "id") { 
       $info = pathinfo($file);
       echo  '<meta charset = "utf8"/>'.file_get_contents($_GET['name']."-"."dialog/".$info['filename'].'.txt');
    }
     
}
  }
  }?>

