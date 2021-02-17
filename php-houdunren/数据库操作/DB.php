<?php 
namespace Database;
use \PDO;

class DB {
  protected $link;
  protected $options = [
    'table'=>'','field'=>'',
    'order'=>'','limit'=>'',
    'where'=>''
  ];
  public function __construct(array $config) {
    $this->connect($config);
  }
  protected function connect(array $config) {
    $dsn = sprintf(
      "mysql:host=%s;dbname=%s;charset=%s",
      $config['host'],
      $config['database'],
      $config['charset']
    );
    $this->link = new PDO($dsn,$config['user'],$config['password']);
  }

  // 查询操作
  public function query(string $sql, array $vars = NULL) {
    $this->link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $sth = $this->link->prepare($sql);
    $sth->execute($vars);
    return $sth->fetchAll();
  }

  // 执行器
  public function execute(string $sql, array $vars = []) {
    $sth = $this->link->prepare($sql);
    return $sth->execute($vars);
  }

  // 查询表
  public function table(string $table) {
    $this->options['table'] = $table;
    return $this;
  }

  // 字段
  public function field(...$fields) {
    $this->options['field'] = implode('`,`',$fields).'`';
    return $this;
  }

  // 截取
  public function limit(...$limit) {
    $this->options['limit'] = 'LIMIT'.implode(',',$limit);
    return $this;
  }

  // 排序
  public function order(string $order) {
    $this->options['order'] = 'ORDER BY'.$order;
    return $this;
  }

  public function where(string $where) {
    $this->options['where'] = 'WHERE'.$where;
    return $this;
  }

  public function get () {
    $sql ="SELECT {$this->options['filed']} FROM {$this->options['table']} 
      {$this->options['where']} {$this->options['order']} {$this->options['limit']}";
    return $this->query($sql);
  }
}