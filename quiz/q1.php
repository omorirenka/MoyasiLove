<?php
    session_start();

    if(isset($_POST['name'])){  //名前保存
        $_SESSION['name'] = htmlspecialchars($_POST['name'],ENT_QUOTES,"UTF-8");;
    }else{
        $_SESSION['name'] = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/quiz.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Mochiy+Pop+One&family=Vollkorn+SC:wght@400;600&display=swap" rel="stylesheet">
    <title>問１</title>
</head>
<body>
    
<div class="quiz quizcontener">
<form action="an1.php" method="post">
  <div class="inner-block">
    <div class="quiz-content">
        <div class="quiz-question-number text1">Question</div>
        <h2 class="quiz-question text1">全国のもやし生産量の約9割を占めるのは次のうちどれ？</h2>
        <ul class="quiz-answer">
            <li>
                <input type="submit" id="1" name="q1-1"><label for="1" class="text1">緑豆もやし</label>
            </li>
            <li>
                <input type="submit" id="2" name="q1-2"><label for="2" class="text1">ブラックマッペ（黒豆）もやし</label>
            </li>
            <li>
                <input type="submit" id="3" name="q1-3"><label for="3" class="text1">大豆（豆）もやし</label>
            </li>
            <li>
                <input type="submit" id="4" name="q1-4"><label for="4" class="text1">黄豆もやし</label>
            </li>
        </ul>
    </div>
  </div>
</form>
</div>

</body>
</html>