<?php
class Model {
  // 类常量只能使用类来调用
  const EXIST_VALIDATE = 1;
  public function validate() {
    return self::EXIST_VALIDATE;
  }
}
$model = new Model;
echo $model->validate();