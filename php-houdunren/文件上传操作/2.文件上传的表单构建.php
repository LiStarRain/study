<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="3.单文件上传处理.php" method="POST" enctype="multipart/form-data">
    <!-- 控制上传文件大小 单位：字节 -->
    <!-- <input type="hidden" name="MAX_FILE_SIZE" value="20000" /> -->
    <input type="file" name="upload" />
    <input type="submit" value="提交" />
  </form>
</body>
</html>