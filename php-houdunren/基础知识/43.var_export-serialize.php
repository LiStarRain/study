<?php
// $users = [
//   'name'=>'ame',
//   'age'=>21,
//   'sex'=>'male',
//   'grade'=>[
//     'chinese'=>121,
//     'engish'=>125,
//     'math'=>110
//   ]
// ];
// 使用var_export()可以生成符合语法的原始的代码字符串 可以用来把代码单独存为一个文件
// $config = var_export($users,true);
// file_put_contents('43.test.php',"<?php return ".$config.';');

// serialize()序列化 把数据序列化为字符串 我们就可以存去其他地方了
// $database = include '43.test.php';
// $cache = serialize($database);
// 反序列化
// print_r(unserialize($cache)['name']); // ame

// 缓存
function cache($name,array $data = null) {
  $file = 'cache'.DIRECTORY_SEPARATOR.md5($name).'php';
  if (is_null($data)) {
    // 取缓存数据
    $content = is_file($file) ? file_get_contents($file) : null;
    return unserialize($content);
  } else {
    // 存缓存数据
    return file_put_contents($file,serialize($data));
  }
}
$data = include './43.test.php';
cache('database',$data);
$users = cache('database');
echo $users['name']; // ame