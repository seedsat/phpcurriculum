<?php
  require_once('getData.php');

  $get_data = new getData();
  $userData = $get_data->getUserData();
  $postData = $get_data->getPostData();
  $sql = $postData->queryString;
  $stmt = $get_data->pdo->prepare($sql);
  $stmt->execute();
  $results = $stmt->fetchAll();
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
  <div id="wrapper">
    <header>
      <div class="logo">
        <img src="logo.png" alt="logo">
      </div>
      <div class="headright">
        <div class="rightheadtop">
          <p>ようこそ<?php echo $userData['last_name']; ?><?php echo $userData['first_name']; ?>さん</p>
        </div>
        <div class="rightheadbottom">
          <p>最終ログイン日：<?php echo $userData['last_login']; ?></p>
        </div>
      </div>
    </header>
    <div class="main">
      <table border="1">
        <tr>
          <th>記事ID</th>
          <th>タイトル</th>
          <th>カテゴリ</th>
          <th>本文</th>
          <th>投稿日</th>
        </tr>
        <?php foreach($results as $key => $value): ?>
        <tr>
          <td><?php echo $value['id']; ?></td>
          <td><?php echo $value['title']; ?></td>
          <td><?php echo $value['category_no']; ?></td>
          <td><?php echo $value['comment']; ?></td>
          <td><?php echo $value['created']; ?></td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
    <footer>
      <p>Y&I group.Inc</p>
    </footer>
  </div>
</body>
</html>