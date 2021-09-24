<?php
    require_once 'db_connect.php';
    require_once 'function.php';

    check_user_logged_in();

    if(isset($_POST['submit'])) {
        if(empty($_POST['title'])) {
            echo 'タイトルを入力してください。';
        }

        if(empty($_POST['date'])) {
            echo '発売日を入力してください。';
        }

        if($_POST['stock'] == 0) {
            echo '在庫数を選択してください。';
        }

        if(!empty($_POST['title']) && !empty($_POST['date']) && !empty($_POST['stock'])) {
            
            $pdo = db_connect();

            try {
                $sql = 'insert into books(title, date, stock) values(:title, :date, :stock)';
                $stock = $_POST['stock'] - 1;
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':title', $_POST['title']);
                $stmt->bindParam(':date', $_POST['date']);
                $stmt->bindParam(':stock', $stock);
                $stmt->execute();
                header('Location: main.php');
                exit;
            } catch (PDOException $e) {
                echo 'Error:' . $e->getMessage();
                die();
            }
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
    <title>本の新規登録</title>
</head>
<body>
    <div id="wrapper">
        <div class="main">
            <div class="title">
                <h1>本　登録画面</h1>
            </div>
            <form class="form" action="" method="post">
                <input type="text" name="title" class='input' placeholder="タイトル"><br>
                <input type="date" name="date" class='input' placeholder="発売日"><br>
                <div class="stock">
                    <h3>在庫数</h3>
                    <select name="stock" id="stock">
                        <option value="0">選択してください</option>
                        <?php for($i = 0; $i <= 10; $i++){ ?>
                            <option value="<?php echo $i + 1; ?>"><?php echo $i ?></option>
                        <?php } ?>
                    </select>
                </div>
                <input type="submit" value="登録" class='submit' name='submit'>
            </form>
        </div>
    </div>
</body>
</html>