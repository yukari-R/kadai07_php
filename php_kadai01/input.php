<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="input.css">
    <title>Check in</title>
</head>
<body>
    <div class="box1">
        <h1>Check in</h1>
    </div>
    <form action="write.php" method="post"><div class="box2">
            <input type ="date" name="date">
        <h2>今の気持ちは？</h2>
        <div class="selectbox">
            <div class="radio"><img src="radio1-1.png"></div>
            <div class="radio"><img src=""></div>
            <div class="radio"><img src="radio1-3.png"></div>
            <div class="radio"><img src=""></div>
            <div class="radio"><img src="radio1-5.png"></div>
        </div>
        <div class="selectbox">
            <div class="radio"><input type ="radio" name="feeling" value="5"></div>
            <div class="radio"><input type ="radio" name="feeling" value="4"></div>
            <div class="radio"><input type ="radio" name="feeling" value="3"></div>
            <div class="radio"><input type ="radio" name="feeling" value="2"></div>
            <div class="radio"><input type ="radio" name="feeling" value="1"></div>
        </div>
        <div class="selectbox_txt">
            <div class="radio"><p class="choice">最高</p></div>
            <div class="radio"><p class="choice">良い</p></div>
            <div class="radio"><p class="choice">そこそこ</p></div>
            <div class="radio"><p class="choice">微妙</p></div>
            <div class="radio"><p class="choice">最悪</p></div>
        </div>

        <h2>今の体調は？</h2>
        <div class="selectbox">
            <div class="radio"><img src="radio1-1.png"></div>
            <div class="radio"><img src=""></div>
            <div class="radio"><img src="radio1-3.png"></div>
            <div class="radio"><img src=""></div>
            <div class="radio"><img src="radio1-5.png"></div>
        </div>
        <div class="selectbox">
            <div class="radio"><input type ="radio" name="condition" value="5"></div>
            <div class="radio"><input type ="radio" name="condition" value="4"></div>
            <div class="radio"><input type ="radio" name="condition" value="3"></div>
            <div class="radio"><input type ="radio" name="condition" value="2"></div>
            <div class="radio"><input type ="radio" name="condition" value="1"></div>
        </div>
        <div class="selectbox_txt">
            <div class="radio"><p class="choice">絶好調</p></div>
            <div class="radio"><p class="choice">元気</p></div>
            <div class="radio"><p class="choice">そこそこ</p></div>
            <div class="radio"><p class="choice">お疲れ</p></div>
            <div class="radio"><p class="choice">絶不調</p></div>
        </div>
        <h2>今考えていることは？</h2>
            <div class="comment"><input type ="text" name="comment" class="comment_txt"></div>
            
        <div class="submit"><input type="submit" value="送信" class="submit_txt"></div>
    </div></form>

</body>
</html>