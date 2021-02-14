<?php
class User {
  protected $name;
  protected $age;
  public function __unset($name) {
    // 删除属性时自动执行
    echo 'unset';
  }
  public function __isset($name) {
    // 判断属性是否存在时自动执行
    echo 'isset';
  }
}
$user = new User;
unset($user->name);
isset($user->age);