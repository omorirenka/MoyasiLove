<?php
    session_start();
    $answernum = $_SESSION['answernum'];

    if(isset($_POST['q3-3'])){
        $answer = 1;
    }else if(isset($_POST['q3-1']) || isset($_POST['q3-2']) || isset($_POST['q3-4'])) {
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

    <title>問３答え</title>
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
    もやしは、白い軸と、根元の細いひげ根、薄黄色の子葉や豆の部分で構成されています。
    このうち、栄養が多く集まっていると言われるのは子葉や豆の部分です。
    特に大豆もやしの豆の部分には、タンパク質やイソフラボンが豊富に含まれています。<br>
    したがって、答えは「子葉や豆」になります。
    </div>
    <div class = "next">
    <form action = "q4.php" method="post">
    <input type="submit" value="次へ" class = "button">
    </form>
    </div>
</div>
</body>
</html>