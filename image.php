<?php

//まあここはコピペだから------------------------------------------------------
// DB接続情報
$dbn = 'mysql:dbname=gsacf_l05_16;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}
//-----------------------------------------------------------------------

$sql = 'SELECT * FROM GeekFukuoka_LAB05 WHERE image_id = :image_id LIMIT 1';
// var_dump($GeekFukuoka_LAB05);
// exit;

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':image_id', (int)$_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$image = $stmt->fetch();

header('Content-type: ' . $image['image_type']);
echo $image['image_content'];
exit();
