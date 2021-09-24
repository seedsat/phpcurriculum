<?php 
    require_once 'db_connect.php';
    require_once 'function.php';

    check_user_logged_in();

    if(isset($_GET['id'])) {
        $pdo = db_connect();

        // データの有無を検索
        try {
            $sql = 'select * from books where id = :id';
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':id', $_GET['id']);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo 'Error:'  . $e->getMessage();
            die();
        }

        // IDからデータを検索しあれば削除
        if($result) {
            try {
                $sql = 'delete from books where id = :id';
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':id', $_GET['id']);
                $stmt->execute();
                header('Location: main.php');
            } catch(PDOException $e) {
                echo 'Error:'  . $e->getMessage();
                die();
            }
        } else {
            header('Location: main.php');
        }
    }
?>