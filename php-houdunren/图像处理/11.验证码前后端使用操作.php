<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="11.test.php" method="POST">
    <table border="1">
      <tr>
        <td><input type="text" name='captcha'></td>
        <td><img onclick="this.src='10.基于面向对象的验证码基础.php?'+Math.random()" 
        src="10.基于面向对象的验证码基础.php"></td>
      </tr>
    </table>
    <button>提交</button>
  </form>

</body>
</html>