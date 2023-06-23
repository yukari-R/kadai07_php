<?php


$date = $_POST["date"];
$feeling = $_POST["feeling"];
$condition = $_POST["condition"];
$comment = $_POST["comment"];

$data_array =  $date . "," . $feeling . "," . $condition . "\n";

file_put_contents("data/data.csv", $data_array, FILE_APPEND);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>記録完了</title>
</head>
<body>
<h1>記録完了！</h1>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
    
</body>
</html>