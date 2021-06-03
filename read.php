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



$sql = 'SELECT * FROM GeekFukuoka_LAB05 ORDER BY created_at DESC';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$GeekFukuoka_LAB05 = $stmt->fetchAll();




?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>宇宙〜</title>
  <script src="https://aframe.io/releases/0.8.2/aframe.min.js"></script>
</head>

<body>



  <a-scene background="color: black">

    <a-sphere color="yellow" radius="1" position="-0.5 -5.4 -2.8" src="img/sun.png"></a-sphere>
    <a-sphere color="yellow" radius="1" position="2.5 -4.1 -13.1" src="img/g.png"></a-sphere>
    <a-sphere color="yellow" radius="1" position="-8.5 -3.5 -7.5" src="img/s.png"></a-sphere>
    <a-sphere color="yellow" radius="1" position="3.9 -0.1 -1.6" src="img/e.png"></a-sphere>
    <a-sphere color="yellow" radius="1" position="-6.5 7.4 -22.2" src="img/b.png"></a-sphere>

    <a-image src="img/a2.png" position="-3.5 0.3 -3.1" geometry="primitive: plane; width: 1" material="color: #F5DEB3	" text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="img/a7.png" position="9.5 6.3 -8.1" geometry="primitive: plane; width: 1" material="color: #F5DEB3	" text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="img/a9.png" position="-8.5 7.3 -4.1" geometry="primitive: plane; width: 1" material="color: #F5DEB3	" text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="img/a12.png" position="7.0 2.3 -1.7" geometry="primitive: plane; width: 1" material="color: #F5DEB3	" text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="img/a15.png" position="-12.5 -7.3 -9.1" geometry="primitive: plane; width: 1" material="color: #F5DEB3	" text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="img/a18.png" position="1.5 -5.3 -5.1" geometry="primitive: plane; width: 1" material="color: #F5DEB3	" text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="img/a21.png" position="-1.3 -7.9 -4.1" geometry="primitive: plane; width: 1" material="color: #F5DEB3	" text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="img/a24.png" position="-4.5 -8.3 -2.1" geometry="primitive: plane; width: 1" material="color: #F5DEB3	" text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="img/a27.png" position="6.5 -5.3 -1.1" geometry="primitive: plane; width: 1" material="color: #F5DEB3	" text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="img/a31.png" position="-2.5 -1.3 -8.1" geometry="primitive: plane; width: 1" material="color: #F5DEB3	" text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>












    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[0]['image_id']; ?>" position="-0.5 3 -8" geometry="primitive: plane; width: 1" material="color: #F5DEB3	" text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[1]['image_id']; ?>" position="-2.5 1.3 -8.1" geometry="primitive: plane; width: 1" material="color: #F5DEB3	" text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[2]['image_id']; ?>" position="2.5 5.6 -3.3" geometry="primitive: plane; width: 1" material="color: #F5DEB3 " text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[3]['image_id']; ?>" position="-4.5 -2.3 -1.9" geometry="primitive: plane; width: 1" material="color: #F5DEB3 " text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[4]['image_id']; ?>" position="-3.5 4.6 -5.7" geometry="primitive: plane; width: 1" material="color: #F5DEB3 " text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[5]['image_id']; ?>" position="6.3 -2.8 -3.4" geometry="primitive: plane; width: 1" material="color: #F5DEB3 " text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[6]['image_id']; ?>" position="-6.6 -4.3 -2.9" geometry="primitive: plane; width: 1" material="color: #F5DEB3 " text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[7]['image_id']; ?>" position="-4.5 -5.1 -9.5" geometry="primitive: plane; width: 1" material="color: #F5DEB3 " text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[8]['image_id']; ?>" position="4.5 -3.5 -2.7" geometry="primitive: plane; width: 1" material="color: #F5DEB3 " text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[9]['image_id']; ?>" position="-0.5 -2.7 -4.4" geometry="primitive: plane; width: 1" material="color: #F5DEB3 " text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[10]['image_id']; ?>" position="-2.6 2.6 -1.7" geometry="primitive: plane; width: 1" material="color: #F5DEB3 " text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[11]['image_id']; ?>" position="3.5 3.8 -6.6" geometry="primitive: plane; width: 1" material="color: #F5DEB3 " text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[12]['image_id']; ?>" position="-1.5 7.2 -5.1" geometry="primitive: plane; width: 1" material="color: #F5DEB3 " text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[13]['image_id']; ?>" position="-4.5 8.6 -3.6" geometry="primitive: plane; width: 1" material="color: #F5DEB3 " text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>

    <a-image src="image.php?id=<?= $GeekFukuoka_LAB05[14]['image_id']; ?>" position="3.5 -4.9 -7.6" geometry="primitive: plane; width: 1" material="color: #F5DEB3 " text="color: black; align: center; font: dejavu;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="5 5 5"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-image>








    <a-entity link="href: index.php" position="15 0 -10" geometry="width: 5" material="color: #EF2D5E" text="color: black; align: center; font: dejavu;
              value:Go_InputPage;">
      <a-animation begin="click" attribute="scale" dur="500" easing="ease-in-sine" to="2 2 2"></a-animation>
      <a-animation begin="mouseleave" attribute="scale" delay="500" to="1 1 1"></a-animation>
    </a-entity>





    <a-entity camera look-controls wasd-controls>
      <a-entity cursor="fuse: true;" position="0 0 -1" geometry="primitive: ring; radiusInner: 0.01; radiusOuter: 0.012" material="color: white; shader: flat">
        <a-animation begin="click" attribute="scale" dur="150" fill="forwards" from="0.1 0.1 0.1" to="1 1 1"></a-animation>
        <a-animation begin="cursor-fusing" attribute="scale" dur="1500" fill="backwards" from="1 1 1" to="0.1 0.1 0.1"></a-animation>
      </a-entity>
    </a-entity>
  </a-scene>

  <script></script>


</body>

</html>