<?php
// ファイルを開く
$data = file_get_contents("data/data.csv");

// ファイル内容を1行ずつ読み込んで出力
// nl2brは nl ===> br　\nを改行させる
// echo nl2br($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="read.css">
</head>
<body>
<h1>最近どう？</h1>
<div class="canvas_area">
    <canvas id="myChart"></canvas>
</div>

<ul>
        <li><a href="input.php">戻る</a></li>
    </ul>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="d3.v7.js" charset="utf-8"></script>
<script>

const chartData = "data/data.csv";

// parse the file from CSV to JSON
d3.csv(chartData).then(function(datapoints){
    console.log(datapoints);
    const date = [];
    const feeling = [];
    const condition = [];

    for(i = 0; i < datapoints.length; i++){
        date.push(datapoints[i].date)
        feeling.push(datapoints[i].feeling)
        condition.push(datapoints[i].condition)
    }
    console.log(date);

        // setup 
        const data = {
    labels: date,
    datasets: [{
        label: '気分',
        data: feeling,
        backgroundColor: [
        'rgba(0, 255, 0, 0.2)'
        ],
        borderColor: [
        'rgba(0, 255, 0, 1)'
        ],
        borderWidth: 1
    },{
        label: '体調',
        data: condition,
        backgroundColor: [
        'rgba(0, 179, 179, 0.2)'
        ],
        borderColor: [
        'rgba(0, 179, 179, 1)'
        ],
        borderWidth: 1
    }]
    };

    // config 
    const config = {
    type: 'line',
    data,
    options: {
        title:{
            display: true,
            text: "最近はどんな感じ？"
        },
        scales: {
        y: {
            beginAtZero: true
        }
        }
    }
    };

    // render init block
    const myChart = new Chart(
    document.getElementById('myChart'),
    config
    );

});


    </script>
</body>
</html>
