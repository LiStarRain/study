<?php
// 转义符：\
$str = "\"ame\"";
echo $str.'<hr/>'; // "ame"
echo "\\test".'<hr/>'; // \test
echo "ame\train".'<hr/>'; // ame  test 制表符
echo "ame\nrain".'<hr/>'; // 换行符