<?php
// $name = 'ame';
// 找不到文件会警告 还可以继续向下执行
// if (!@include './23.html') {
//   include 'default.html';
// }
?>
<?php
// 相当于
$name = 'ame';
?>
<h1>Ame-<?php echo $name; ?></h1>
<?php


// 使用require文件不存在会抛出错误
// require('index.html');