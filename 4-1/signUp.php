<?php
    require_once 'db_connect.php';

    define('CURRENT_URI', $_SERVER['REQUEST_URI']);

    if(isset($_POST['signUp'])) {
        $name = $_POST['name'] ? $_POST['name'] : '';
        $pwd = $_POST['password'] ? password_hash($_POST['password'], PASSWORD_DEFAULT) : '';

        if(!empty($name) && !empty($pwd)) {
            $pdo = connect();
            
            try {
                $sql = 'insert into users(name, password) values(:name, :password)';
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':name', $name);
                $stmt->bindParam(':password', $pwd);
                $stmt->execute();
                echo '登録が完了しました。';
            } catch(PDOException $e) {
                echo 'データベースエラー';
                $e->getMessage();
            }
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>新規登録</h1>
    <form method="POST" action="">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>