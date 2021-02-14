<?php
class User {
  protected $name;
  public function say() {
    return $this->name.'说：憨批';
  }
  public function setName(string $name) {
    $this->name = $name;
  }
}
// 实例化类
$user = new User;
$user->setName('ame');
echo $user->say();