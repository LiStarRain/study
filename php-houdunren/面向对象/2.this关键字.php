<?php
class User {
  protected $name;
  public function say() {
    return $this->getName().'说：憨批';
  }
  public function setName(string $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}
// this 关键字指向通过类新生成的实例对象
// 实例化类
$user = new User;
$user->setName('ame');
echo $user->say();
$rain = new User;
$rain->setName('rain');
echo $rain->say();