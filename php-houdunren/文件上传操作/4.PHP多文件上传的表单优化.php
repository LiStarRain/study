<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="5.Uploader.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="upload" />
    <!-- 多文件上传 -->
    <input type="file" name="images[]" />
    <input type="file" name="images[]" />
    <hr/>
    <input type="submit" value="提交" />
  </form>
</body>
</html>