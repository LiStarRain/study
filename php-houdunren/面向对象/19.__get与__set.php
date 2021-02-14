<?php
abstract class Query {
  abstract protected function record(array $darta);
  public function select() {
    $this->record(['name'=>'ame','age'=>29]);
  }
}

class Model extends Query {
  protected $fileld = [];
  public function all() {
    $this->select();
    return $this->fileld;
  }
  protected function record(array $data) {
    $this->fileld = $data;
  }
  // getter
  public function __get($name)
  {
    if (isset($this->fileld[$name])) {
      return $this->fileld[$name];
    } else {
      return '错误';     
    }
  }
  // setter
  public function __set($name,$value) {
    echo '哈哈';
  }
}
$user = new Model;
print_r($user->all());
echo $user->name; // ame
$user->name = 'ame'; // 哈哈