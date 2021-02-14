<?php
class Notify {
  protected function send() {
    return '哈哈';
  }
}

class User extends Notify {
  // 不加public默认就是public
  public function say() {
    return $this->send();
  }
  // protected定义的属性或方法只能在当前类及其子类中使用
  // private定义的属性或方法只能在当前类中使用
}
$user = new User;
echo $user->say();