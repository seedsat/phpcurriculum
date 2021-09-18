<?php
  require_once('db_connect.php');

  // インサートsql
  // $sql = "insert into users(name, password) values('Jiro Yamada', 'jiro')";

  // $pdo = db_connect();
  // try {
  //   $stmt = $pdo->prepare($sql);
  //   $stmt->bindParam(':name', $name);
  //   $stmt->bindParam(':password', $password);
  //   $stmt->execute();
  //   echo 'インサートしました。';
  // } catch (Exception $e) {
  //   echo 'Error:'. $e->getMessage();
  //   die();
  // }

  // 全件取得のsql
  // $sql = "select * from users";
  // $pdo = db_connect();
  // try {
  //   $stmt = $pdo->prepare($sql);
  //   $stmt->execute();

  //   while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //     echo $row['id'] . '、' . $row['name'] . '、' . $row['password'];
  //     echo '<br>';
  //   }
  // } catch (Exception $e) {
  //   echo 'Error:'.$e->getMessage();
  //   die();
  // }

  // 条件を指定して取得するsql
  // $id = 1;
  // $sql = 'select * from users where id = :id';
  // $pdo = db_connect();
  // try {
  //   $stmt = $pdo->prepare($sql);
  //   $stmt->bindParam(':id', $id);
  //   $stmt->execute();

  //   while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  //     echo $row['id'].'、'.$row['name'].'、'.$row['password'];
  //     echo '<br>';
  //   }
  // } catch(Exception $e) {
  //   echo 'Error:' . $e->getMessage();
  //   die();
  // }

  // データ更新のsql
  // $id = 1;
  // $name = 'Hanako Yamada';

  // $sql = "update users set name = :name where id = :id";
  // $pdo = db_connect();
  // try {
  //   $stmt = $pdo->prepare($sql);
  //   $stmt->bindParam(':name', $name);
  //   $stmt->bindParam(':id', $id);
  //   $stmt->execute();
  //   echo '更新完了';
  // } catch (Exception $e) {
  //   echo 'Error:' . $e->getMessage();
  // }

  // データ削除のsql
  $id = 1;
  $sql = "delete from users where id = :id";
  $pdo = db_connect();
  try {
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo '削除しました';
  } catch(Exception $e) {
    echo 'Error:' . $e->getMessage();
    die();
  }