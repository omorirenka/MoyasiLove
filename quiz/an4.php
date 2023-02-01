<?php
    session_start();
    $answernum = $_SESSION['answernum'];

    if(isset($_POST['q4-1'])){
        $answer = 1;
    }else if(isset($_POST['q4-2']) || isset($_POST['q4-3']) || isset($_POST['q4-4'])) {
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

    <title>問４答え</title>
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
    もやしのカロリーは、100gあたりわずか15～30kcal。
    低カロリーなのにボリュームたっぷりなので、主食をもやしに置き換えたり、
    いつもの料理をもやしでかさ増ししたりすることで、摂取カロリーをコントロールすることができます。
    糖質量も100gあたり0～1.3gと少ないので、糖質制限ダイエットにも最適。<br>
    したがって、答えは「15～30kcal」になります。
    </div>
    <div class = "next">
    <form action = "q5.php" method="post">
    <input type="submit" value="次へ" class = "button">
    </form>
    </div>
</div>
</body>
</html>