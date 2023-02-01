<?php
    session_start();
    $answernum = $_SESSION['answernum'];

    if(isset($_POST['q5-4'])){
        $answer = 1;
    }else if(isset($_POST['q5-1']) || isset($_POST['q5-2']) || isset($_POST['q5-3'])) {
        $answer = 0;
    }

    if($answer === 1){
        $answernum += $answer;
    }
    $_SESSION['answernum'] = $answernum;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/quiz.css">

    <title>問５答え</title>
</head>
<body>
<div class="answercontainer">
    <?php if($answer === 1){ ?>
    <p class="answer text1">正解</p>
    <?php }else{ ?>
    <p class="answer text1">不正解</p>
    <?php } ?>
    <hr class="quizhr">
    <div class="explanation">
    もやしは水耕栽培なので、生産には大量の水が必要となります。
    栃木県は栽培に地下水を使用することを認めているために、水道代を大幅にカットできます。
    また、もやし栽培の大手4社のうち3社が栃木県に工場を構えています。<br>
    したがって、答えは「栃木県」になります。
    </div>
    <div class = "next">
    <form action = "finish.php" method="post">
    <input type="submit" value="次へ" class = "button">
    </form>
    </div>
</div>
</body>
</html>