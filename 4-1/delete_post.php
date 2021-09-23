<?php
    require_once 'db_connect.php';

    require_once 'function.php';

    check_user_logged_in();

    $id = $_GET['id'];

    redirect_main_unless_parameter($id);

    $pdo = connect();
    
    try {
        $sql = 'delete from posts where id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        header('Location: main.php');
    } catch(PDOException $e) {
        $e->getMessage();
        die();
    }

?>