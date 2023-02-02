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
        $syougoubun = "おめでとう！君は".$syougou."だ！！";
        $answernum = "全問正解！";
        $moyasiimg = "quiz_kyuuseishu.png";
        $style = "height:65%; width:40%; object-fit: cover;";
    }else if($answernum === 4){
        $syougou = "もやし王";
        $syougoubun = "おめでとう！君は".$syougou."だ！！";
        $answernum = $answernum."問正解！";
        $moyasiimg = "quiz_kingmoyashi.png";
        $style = "height:60%; width:auto;";
    }else if($answernum === 3){
        $syougou = "もやし大臣";
        $syougoubun = "おめでとう！君は".$syougou."だ！！";
        $answernum = $answernum."問正解！";
        $moyasiimg = "quiz_daijin.png";
        $style = "height:60%; width:auto;";
    }else{
        if($answernum === 0){
            $answernum = "全問不正解!";
            $syougou = "もやし国民";
            $syougoubun = "　残念！ 次は頑張ろう！！";
        }else{
            $syougou = "もやし国民";
            $syougoubun = "おめでとう！君は".$syougou."だ！！";
            $answernum = $answernum."問正解！";
        }
        $moyasiimg = "quiz_kokumin.png";
        $style = "height:60%; width:auto;";
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
    <p class = "answernum text1"><?php echo $answernum; ?></p>
    <p class = "syougou text1"><?php echo $syougoubun; ?></p>
    <img src="../img/<?php echo $moyasiimg; ?>" alt="もやし" style="<?php echo $style; ?>">
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