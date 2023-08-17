<html>
	<head>
		<!-- 文字コードの指定 htmlファイル内で指定する場合 -->
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<title>ブザーを1秒間鳴らす</title>
		<link rel="stylesheet" type="text/css" href="./main.css">
	</head>
	<body>
		<h2>Buzzer制御</h2>
		<hr />
		<form action="" method="GET">
			<button class="btn" type="submit" name="buz" value="1">BuzzerON</button>
		</form>
		<?php
			// GETパラメータの存在確認
			if(isset($_GET["buz"])){
				// コマンド実行
				exec("pigs m 12 w w 12 1 mils 3000 w 12 0");
			}
		?>
	</body>
</html>
