<?php
// imagecreatefrompng(filename/url) 可以打开一张图片，返回一个资源类型
$resource = imagecreatefrompng('./1.png');
// var_dump($resource);
$water = imagecreatefrompng('./water.png');
// imagesx($res) 可以获取图片宽度
// echo imagesx($water);
// imagesy($res) 查看图片高度
// echo imagesy($water);

// getimagesize(filename)直接通过文件名获取图片宽度
// 1 gif 2 jpg 3 png
print_r(getimagesize('water.png'));