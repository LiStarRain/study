<?php
class Model {
  public function __call($name, $arguments) {
    // 当调用一个不存在的方法时会自动执行__call方法
    echo $name;
    $action = 'getAttribute'.$name;
    // 检测方法是否存在
    if (method_exists($this, $action)) {
      // 调用函数
      return call_user_func_array([$this, $action],$arguments);
    }
  }
}

class User extends Model {
  protected function getAttributeMombile() {
    // 希望读取$mombile属性时自动调用该方法
    return 'getAttributeMombile';
  }
}
// $user = new User;
// echo $user->mombile();