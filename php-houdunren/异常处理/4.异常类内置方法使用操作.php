<?php
class VaildateException extends Exception {
  public function __toString() {
    // 打印对象（将对象转为字符串）时自动调用
    return 'ame:'.$this->getFile().$this->getCode().
    $this->getLine().$this->getMessage();
  }
}

try {
  throw new VaildateException('验证错误', 403);
} catch (VaildateException $error) {
  // 获取错误信息
  // echo $error->getMessage(); // 哈哈
  // 获取产生错误的文件

  // echo $error->getFile();
  // 获取错误码
  // echo $error->getCode(); // 403
  // 获取错误行
  // echo $error->getLine(); // 7
  echo $error;
} 