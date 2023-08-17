<!DOCTYPE html>
<html>
<head>
    <!-- 文字コードの指定：html ファイル内で指定する場合 -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
</head>
<body>
    <h2>SW制御</h2>
    <form action="" method="GET">
        <button type="submit">Update</button>
    </form>

    <?php
    // GPIO6 端子を入力モードにする
    $sw_r = exec("pigs m 6 r");
    echo $sw_r;
    ?>

    <!-- GPIO6 端子の値を取得 -->

</body>
</html>
