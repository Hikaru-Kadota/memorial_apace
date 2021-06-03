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




//入力値がセットできない、もしくは空であればエラーを返す
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
  // 画像を取得

} else {
  // 画像を保存
  if (!empty($_FILES['image_file']['name'])) {
    $name = $_FILES['image_file']['name'];
    $type = $_FILES['image_file']['type'];
    $content = file_get_contents($_FILES['image_file']['tmp_name']);
    $size = $_FILES['image_file']['size'];

    // var_dump($size);
    // exit;

    $sql = 'INSERT INTO GeekFukuoka_LAB05(image_name, image_type, image_content, image_size, created_at)
                VALUES (:image_name, :image_type, :image_content, :image_size, now())';


    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':image_name', $name, PDO::PARAM_STR);
    $stmt->bindValue(':image_type', $type, PDO::PARAM_STR);
    $stmt->bindValue(':image_content', $content, PDO::PARAM_STR);
    $stmt->bindValue(':image_size', $size, PDO::PARAM_INT);
    $stmt->execute();
  }

  header('Location:index.php');
  exit();
}
