<?php
session_start();
?>
<html>

<head>
<link rel="shortcut icon" href="https://sun9-72.userapi.com/impg/xm8vlxfP-85MNtD3nrzsVeYJ2JwPEtnbxY076g/SV8ZgG8UKqk.jpg?size=1920x1920&quality=96&sign=89c050a5efb22acf6a566145e178ff76&type=album" type="image/png">
<title>
Общий чат JSONBase
</title>
<style>
.send
{
border-radius:10px;
background:red;
border:1px solid red;
color:white;
}
a
{
	color:white;
}
</style>
<meta charset ="utf-8"/>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(79397965, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/79397965" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>


<center>
<h2>JSONBase Chat Free</h2><br>
<?php
if (isset($_SESSION['name']))
{
	echo '<br><br><h2>Добро пожаловать'.$_SESSION['name'].'!<br><br>';
}
?>
<a href = "create.php"><button class = 'send'>Создать беседу</a></button>

<?php
if (!isset($_SESSION['name']))
{
	echo'<script> location.href = "login"</script>';
}
?>
<br><br>
<a href = "bot.php"><button class = 'send'>Бот знакомств</a></button></center>
</body>