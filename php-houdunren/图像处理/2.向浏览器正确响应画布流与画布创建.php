<?php
// 必须先通过响应头信息告诉浏览器服务器所相应的是图片类型的数据
// header('Content-type:image/jpg');
// readfile()可以输出文件。读取文件并写入到输出缓冲
// readfile('./派大星.jpg');
// imagecreatetruecolor(width,heght)可以创建画布，超出宽高的图像不会显示，返回值为资源类型
$res = imagecreatetruecolor(500,500);
var_dump($res);