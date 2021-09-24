<?php
    // ユーザー登録ページ
    require_once 'db_connect.php';
    require_once 'function.php';

    if(!empty($_POST)) {

        check_empty_name_pwd($_POST['name'], $_POST['pwd']);

        if(!empty($_POST['name']) && !empty($_POST['pwd'])) {
            $name = $_POST['name'];
            $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

            $pdo = db_connect();

            try {
                $sql = 'insert into users(name, password) values(:name, :password)';
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':password', $pwd);
                $stmt->execute();
                header('Location: login.php');
            } catch (PDOException $e) {
                echo 'Error:' . $e->getMessage();
                die();
            }
        }
    }
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>新規登録</title>
</head>
<body>
    <div id="wrapper">
        <div class="main">
            <div class="title">
                <h1>ユーザー登録画面</h1>
            </div>
            <form class="form" action="" method="post">
                <input type="text" name="name" class='input' placeholder="ユーザー名"><br>
                <input type="password" name="pwd" class='input' placeholder="パスワード"><br>
                <input type="submit" value="新規登録" class='submit' name='submit'>
            </form>
        </div>
    </div>
</body>
</html>