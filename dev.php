<html>
<head>
<meta charset="utf-8">
<title>Ошибка!</title>
</head>
<body>
<?php
$vvod = $_POST['vvod'];

if($vvod == "WAP" || $vvod == "wap") {
	header("Location: https://ru.wikipedia.org/wiki/Wireless_Application_Protocol");
	exit;
}

if($vvod == "Текстовый этап установки Windows") {
	header("Location: https://it.wikireading.ru/57323");
	exit;
}

if($vvod == "GPRS" || $vvod == "gprs") {
	header("Location: https://ru.wikipedia.org/w/index.php?search=GPRS&title=Служебная%3AПоиск&ns0=1");
	exit;
}

if($vvod == "Marmallade SDK" || $vvod == "marmallade sdk") {
	header("Location: https://ru.wikipedia.org/wiki/Marmalade_SDK");
	exit;
}

else {
	echo "<center>"."К сожалению ничего не найдено :( Проверьте верность запроса и повторите попытку"."</center>";
}
?>
</body>

</html>