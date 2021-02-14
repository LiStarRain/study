<?php
class User {
  protected $name;
  protected static $className;
  // 静态方法，共享方法
  public static function getClassName() {
    // 里面不能使用$this，它不指向类新生成的对象
    // 若方法服务于所有对象可以将它定义为静态方法
    return self::$className;
  }
  public function setName(string $name) {
    $this->name = $name;
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
echo User::getClassName(); // ame and rain