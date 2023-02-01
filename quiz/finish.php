<?php
    session_start();
    $answernum = $_SESSION['answernum'];

    $answer = 0;
    if(isset($_POST['q5-4'])){
        $answer = 1;
    }else if(isset($_POST['q5-1']) || isset($_POST['q5-2']) || isset($_POST['q5-3'])) {
        $answer = 0;
    }

    if($answer === 1){
        $answernum += $answer;
    }

    if($answernum === 5){
        $syougou = "救世主";
        $answernum = "全";
        $moyasiimg = "quiz_kyuuseishu.png";
    }else if($answernum === 4){
        $syougou = "もやし王";
        $moyasiimg = "quiz_kingmoyashi.png";
    }else if($answernum === 3){
        $syougou = "もやし大臣";
        $moyasiimg = "quiz_daijin.png";
    }else{
        $syougou = "もやし国民";
        $moyasiimg = "quiz_kokumin.png";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/quiz.css">

    <title>きみはもやし王になれたか！？</title>
</head>
<body>
<div id="particles-js"></div>
<div id="wrapper">

<div class="finishcontainer">
    <p class = "answernum text1"><?php echo $answernum."問正解！"; ?></p>
    <p class = "syougou text1"><?php echo "おめでとう！君は".$syougou."だ！！"; ?></p>
    <img src="../img/<?php echo $moyasiimg; ?>" alt="もやし" style="height:60%; width:auto;">
</div>
<div class = "returncontainer">
    <a href="https://twitter.com/intent/tweet?hashtags=もやし王&text=称号「<?php echo $syougou ?>」をゲット！！今すぐ君も挑戦しよう！！&url=#" class="twitter-hashtags-btn" target="_blank">
    Twitterでつぶやく
    </a>
    <?php session_destroy(); ?>
    <a href="qstart.html" class = "return">戻る</a>
</div>

<!--/wrapper--></div>
<script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="../js/particles.js"></script>
</body>
</html>