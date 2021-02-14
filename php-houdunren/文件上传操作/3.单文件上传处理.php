<?php
function uploader() {
  $to = 'files/'.$_FILES['upload']['name'];
  // is_uploaded_file(filename) 可以判断该文件是否是合法上传的文件
  if (is_uploaded_file($_FILES['upload']['tmp_name'])) {
    // move_uploaded_file() 可以移动上传的文件
    if (move_uploaded_file($_FILES['upload']['tmp_name'], $to)) {
      // 如果移动成功则返回路径
      return $to;
    }
  }
  // 否则返回false
  return false;
}
uploader();