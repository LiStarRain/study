<?php
// array_key_exits 检测数组内指定的键名或索引是否存在
// $arr = ['name'=>'ame','age'=>16];
// var_dump (array_key_exists('name',$arr)); // true

// 检测数组内是否包含指定的元素
// $arr = [1,2,3];
// var_dump(in_array(1,$arr)); // true


// 
$allowImageType = [
  'jpg'=>200000,
  'png'=>200000,
  'jpeg'=>200000
];
$file = 'ame.jpg';
$ext = strtolower(substr(strchr($file,'.'),1));
// array_keys()方法可以获取由数组所有键名组成的新数组
if(in_array($ext,array_keys($allowImageType))) {
  echo 'success'; // success
} else {
  echo 'fail';
}