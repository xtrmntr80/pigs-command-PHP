<html>

<head>

<!- 文字コードの指定 htmlファイル内で指定する場合 -->

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> <title>LEDO </title>

<link rel="stylesheet" type="text/css" href="/main.css">

</head>

<body>

<h2>LED</h2>

<hr />

<form action="" method="GET">

<button class="btn" type="submit" name="led_all" value="1">ALL ON</button> <button class="btn" type="submit" name="led_all" value="0">ALL OFF</button>

Tab

</form>

<?php

// GETパラメータの存在確認 if (isset($_GET["led_all"])) {

// コマンド実行

exec (sprintf("pigs a 5 wv 5 %s", $_GET["led_all"]));

exec (sprintf("pigs a 16 w 16 %s", $_GET["led_all"]));

exec (sprintf("pigs a 18 vw 18 %s", $_GET["led_all"])); m



?>
