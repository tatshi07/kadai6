<?php
// ファイルに書き込む内容を用意。まずは日付を保存する。
$time = date("Y-m-d H:i:s");
$corp = $_POST['corp'];
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q2'];
$q4 = $_POST['q3'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];

// aモードでファイルをオーブン
$file = fopen('data/data.txt', 'a');

//ファイルへの書き込み。"\n"は「ファイル内での改行」を指示する記述。ブラウザでいう<br>とのようなもの。
fwrite($file, $time . $corp . $q1 . $q2 . $q3 . $q4 . $q5 . $q6 . $q7 . $q8 . "\n");

//ファイルを閉じる
fclose($file);
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
