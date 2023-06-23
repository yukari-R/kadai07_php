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
</head>
<body>
<div>
    <canvas id="myChart"></canvas>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var csvData;
function getCSV(){
    var req = new XMLHttpRequest();
    req.open("get", "data/data.csv", true);
    req.overrideMimeType('text/plain; charset=UTF-8');
    req.send(null);

    req.onload = function(){
    convertCSVtoArray(req.responseText);
    }
}
function convertCSVtoArray(str){
    var result = [];
    var tmp = str.split("\n");
    for (var i = 0; i < tmp.length; ++i) {
    result[i] = tmp[i].split(",");
    alert(result[1][2]);
    }
    
getCSV();


var ctx = document.getElementById("myChart");

    var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: result[0],
        datasets: [
        {
            label: '気分',
            data: result[1],
            backgroundColor: "#bbdbf3"
        },{
            label: '体調',
            data: result[2],
            backgroundColor: "#dbead5"
        }
        ]
    },
    options: {
        title: {
        display: true,
        text: '変化'
        },
        scales: {
        yAxes: [{
            ticks: {
            suggestedMax: 5,
            suggestedMin: 1,
            stepSize: 1,
            callback: function(value, index, values){
                return  value
            }
            }
        }]
        },
    }
    });
}

</script>
</body>
</html>
