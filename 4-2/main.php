<?php
    require_once 'db_connect.php';
    require_once 'function.php';

    check_user_logged_in();

    $pdo = db_connect();

    try {
        $sql = 'select * from books';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        echo 'Error:' . $e->getMessage();
        die;
    }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>トップページ</title>
    </head>
    <body>
        <div id="wrapper">
            <h1>在庫一覧</h1>
            <a href="post.php"><input type="button" value="新規登録" class='submit'></a>
            <a href="logout.php"><input type="button" value="ログアウト" class='logout'></a>
            <div class="stock_list">
                <table border="1">
                    <tr>
                        <th>タイトル</th>
                        <th>発売日</th>
                        <th>在庫数</th>
                        <th></th>
                    </tr>
                    <?php foreach($results as $value) { ?>
                    <tr>
                        <td><?php echo $value['title']; ?></td>
                        <td><?php echo str_replace('-', '/', $value['date']); ?></td>
                        <td><?php echo $value['stock']; ?></td>
                        <td><a href="delete.php?id=<?php echo $value['id']; ?>"><button>削除</button></button></a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </body>
</html>