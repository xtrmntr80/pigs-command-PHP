


<html>

      <head>

          <!-文字コードの指定 htmlファイル内で指定する場合>
          <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
          <title>赤LEDの点灯・消灯サンプル</title>
          <link rel="stylesheet" type="text/css" href="/main.css">

      </head> 
      <body>

            <h2>LED制御</h2>

            <form action="" method="GET">

               <button class="btn" type="submit" name="rled" value="1">ON</button> 
               <button class="btn" type="submit" name="rled" value="0">OFF</button>
            </form> 
            <?php
               // GET パラメータの存在確認 
               if (isset($_GET["rled"])) {
               // コマンド生成
               $cmd = sprintf("pigs m 5 w w 5 %s", $_GET["rled"]); 
               // コマンド実行
               exec($cmd);
               }
           ?>
      </body> 
 </html>

