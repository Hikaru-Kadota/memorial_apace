<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>登録画面</title>
  <style>
    .form-group {
      margin-bottom: 10px;
    }

    .btn {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
  <div class="col-md-4 pt-4 pl-4">
    <form action="create.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>画像を選択</label>
        <div>
          <input type="file" name="image_file" required>
        </div>
      </div>
      <button class="btn" type="submit">保存</button>
    </form>
  </div>
  <a href="read.php">→→ 宇宙へ ←←</a>

</body>

</html>