<?php
  $name = $_POST['name'];

  $port = [1 =>'80', 2 => '22', 3 => '20', 4 =>'21'];
  $language = [1 => 'PHP', 2 => 'Python', 3 => 'JAVA', 4 => 'HTML'];
  $command = [1 => 'join', 2 => 'select', 3 => 'insert', 4 => 'update'];

  $a_port = 1;
  $a_language = 1;
  $a_command = 2;

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
  <div class="question">
    <p>お疲れ様です<?php echo $name; ?>さん</p>
    <form action="answer.php" method="post">
      <h2>①ネットワークのポート番号は何番？</h2>
      <?php foreach($port as $key => $value) : ?>
        <input type="radio" name="port" value="<?php echo $key ?>" ><?php echo $value; ?>
      <?php endforeach; ?>
      
      <h2>②Webページを作成するための言語は？</h2>
      <?php foreach($language as $key => $value) : ?>
        <input type="radio" name="language" value="<?php echo $key ?>" ><?php echo $value; ?>
      <?php endforeach; ?>

      <h2>③MySQLで情報を取得するためのコマンドは？</h2>
      <?php foreach($command as $key => $value) : ?>
        <input type="radio" name="command" value="<?php echo $key ?>" ><?php echo $value; ?>
      <?php endforeach; ?>
      <br>
      <input type="hidden" name="name" value="<?php echo $name; ?>">
      <input type="hidden" name="a-port" value="<?php echo $a_port; ?>">
      <input type="hidden" name="a-language" value="<?php echo $a_language; ?>">
      <input type="hidden" name="a-command" value="<?php echo $a_command; ?>">
      <input type="submit" value="回答する">
    </form>
  </div>
</body>
</html>