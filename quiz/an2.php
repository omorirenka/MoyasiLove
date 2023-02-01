<?php
    session_start();
    $answernum = $_SESSION['answernum'];

    if(isset($_POST['q2-3'])){
        $answer = 1;
    }else if(isset($_POST['q2-1']) || isset($_POST['q2-2']) || isset($_POST['q2-4'])) {
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

    <title>問２答え</title>
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
        もやしには、「カリウム」「カルシウム」「ビタミンB群」「ビタミンC」「食物繊維」などの
        様々な栄養素が含まれています。緑豆もやしと、ブラックマッペもやしには、栄養成分に大きな差はありませんが、
        大豆もやしには上述したような栄養素が、ほかのもやしの2倍以上含まれています。<br>
        したがって、答えは「大豆（豆）もやし」になります。
    </div>
    <div class = "next">
    <form action = "q3.php" method="post">
    <input type="submit" value="次へ" class = "button">
    </form>
    </div>
</div>
</body>
</html>