<?php

$name       = $_POST['name'];
$port       = $_POST['port'];
$language   = $_POST['language'];
$command    = $_POST['command'];
$a_port     = $_POST['a-port'];
$a_language = $_POST['a-language'];
$a_command  = $_POST['a-command'];

function checkAnswer($select, $answer) {
  if($select == $answer) {
    echo '正解！';
  } else {
    echo '残念・・・';
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>答え合わせ</title>
</head>
<body>
  <div class="answer">
    <p><?php echo $name; ?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <?php checkAnswer($port, $a_port); ?>
    <p>②の答え</p>
    <?php checkAnswer($language, $a_language); ?>
    <p>③の答え</p>
    <?php checkAnswer($command, $a_command); ?>
  </div>
</body>
</html>