<?php
    session_start();

    if (isset($_POST['q1-1'])) {
        $answer = 1;
    }else if(isset($_POST['q1-2']) || isset($_POST['q1-3']) || isset($_POST['q1-4'])) {
        $answer = 0;
    }

    if($answer === 1){
        $_SESSION['answernum'] = 1;
    }else{
        $_SESSION['answernum'] = 0;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/quiz.css">

    <title>問１答え</title>
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
        現在国内で流通しているもやしは、緑豆もやし・ブラックマッペ（黒豆）もやし・大豆（豆）もやしの3種類。
        全国のもやし生産量の約9割を緑豆もやしが占めています。「黄豆もやし」は存在しません。<br>
        したがって、答えは「緑豆もやし」となります。
    </div>
    <div class = "next">
    <form action = "q2.php" method="post">
    <input type="submit" value="次へ" class = "button">
    </form>
    </div>
</div>
</body>
</html>