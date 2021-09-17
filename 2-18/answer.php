<?php

$name       = $_POST['name'];
$port       = $_POST['port'];
$language   = $_POST['language'];
$command    = $_POST['command'];
$a_port     = $_POST['a-port'];
$a_language = $_POST['a-language'];
$a_command  = $_POST['a-command'];

function port($port, $a_port) {
  if($port == $a_port) {
    echo '正解！';
  } else {
    echo '残念・・・';
  }
}

function language($language, $a_language) {
  if($language == $a_language) {
    echo '正解！';
  } else {
    echo '残念・・・';
  }
}

function command($command, $a_command) {
  if($command == $a_command) {
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
  <title>Document</title>
</head>
<body>
  <div class="answer">
    <p><?php echo $name; ?>さんの結果は・・・？</p>
    <p>①の答え</p>
    <?php port($port, $a_port); ?>
    <p>②の答え</p>
    <?php language($language, $a_language); ?>
    <p>③の答え</p>
    <?php command($command, $a_command); ?>
  </div>
</body>
</html>