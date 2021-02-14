<?php
class User {
  protected $name;
  // 共享属性 静态属性
  protected static $className;
  public function say() {
    return $this->getName().'说：憨批'.self::$className;
  }
  public function setName(string $name) {
    $this->name = $name;
    // 读写静态变量或者方法 self指向当前类
    self::$className = 'ame and rain';
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