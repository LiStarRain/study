<?php
// $str = "<h1 style=\"color: red;\">ame</h1>";
// echo $str;
// 大量文本时可以使用 字符串定界符<<<任何字符 字符串 任何字符，注意顶头
// $str = <<<str
// <h1 style="color: red;">Rain</h1>
// <script>
  // console.log('Hi');
// </script>
// str;
// echo $str;

// 字符串连接
// $str1 = 'ame';
// $str2 = 'rain';
// echo $str1.'=>'.$str2;

// 获取字符串长度
$str = 'ame';
echo strlen($str); // 3
echo '<hr/>';
echo strlen('哈哈').'<br/>'; // 宽字节
echo mb_strlen('哈哈','utf8'); // 2 按指定编码获取字符串长度