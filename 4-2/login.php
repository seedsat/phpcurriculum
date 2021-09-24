<?php
    // ログインページ
    require_once 'db_connect.php';
    require_once 'function.php';

    session_start();

    if(isset($_POST['submit'])) {

        check_empty_name_pwd($_POST['name'], $_POST['pwd']);

        if(!empty($_POST['name']) && !empty($_POST['pwd'])) {
            $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
            $pwd = htmlspecialchars($_POST['pwd'], ENT_QUOTES);

            $pdo = db_connect();

            try {
                $sql = 'select * from users where name = :name';
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':name', $name);
                $stmt->execute();
            } catch(PDOException $e) {
                echo 'Error:' . $e->getMessage();
                die();
            }

            if($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                if(password_verify($pwd, $row['password'])) {
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    header('Location: main.php');
                    exit;
                } else {
                    echo 'パスワードに誤りがあります。';
                }
            } else {
                echo 'ユーザー名かパスワードに誤りがあります。';
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
    <title>ログインページ</title>
</head>
<body>
    <div id="wrapper">
        <div class="main">
            <div class="title">
                <h1>ログイン画面</h1>
                <a href="<?php echo BASE_PATH . 'signup.php'; ?>"><input type="button" value="新規ユーザー登録" class="signup"></a>
            </div>
            <form class="form" action="" method="post">
                <input type="text" name="name" class='input' placeholder="ユーザー名"><br>
                <input type="password" name="pwd" class='input' placeholder="パスワード"><br>
                <input type="submit" value="ログイン" class='submit' name='submit'>
            </form>
        </div>
    </div>
</body>
</html>