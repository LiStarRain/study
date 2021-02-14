<?php
// 上传的文件保存在 $_FILES超全局数组中
/* 
  tmp_name	临时文件名
  name	上传文件原文件名
  type	文件MIME类型
  error	错误编号
  size	文件大小，单位字节
*/
print_r($_FILES);