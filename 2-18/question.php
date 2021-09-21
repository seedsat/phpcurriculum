<?php
  $name = $_POST['name'] ? $_POST['name'] : 'ゲスト';

  $port = ['80', '22', '20','21'];
  $language = [ 'PHP', 'Python', 'JAVA', 'HTML'];
  $command = [ 'join', 'select', 'insert', 'update'];

  $a_port = 0;
  $a_language = 3;
  $a_command = 1;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>問題</title>
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