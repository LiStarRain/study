<?php
class User {
  public static function __callStatic($name, $arguments){
    // 当调用一个不存在的静态方法会自动执行
    echo '哈哈';
  }
}
User::test(); // 哈哈