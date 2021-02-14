<?php
// $arr = ['小明'];
// $arr[]='小刚'; // 顺序添加时可以不使用下标跟踪
// $arr[]='小红';
// print_r($arr);

// $user = [
//   ['name'=>'ame','age'=>16]
// ];
// $user[0]['age'] = 22;
// print_r($user);

// 通过指针读取数组元素
// $arr = ['ame','rain'];
// key()可以获取数组的头指针所指向元素的索引
// current()可以获取数组指针所指向元素的value
// echo key($arr).'<br/>'; // 0
// echo current($arr).'<hr/>'; // ame
// 使用next()将数组的指针指向下一个并同时返回它的值
// echo next($arr); // rain
// echo key($arr).'<br/>'; // 1
// echo current($arr).'<hr/>'; // rain
// prev()可以将指针往上走并返回该值
// echo prev($arr); // ame
// echo key($arr).'<br/>'; // 0
// echo current($arr).'<hr/>'; // ame


// 通过指针遍历数组
$users = [
  ['name'=>'ame','age'=>16],
  ['name'=>'rain','age'=>22],
  ['name'=>'lsr','age'=>21],
  ['name'=>'kjy','age'=>21],
  ['name'=>'lxy','age'=>19]
];
?>
<table border="1">
  <tr>
    <th>编号</th>
    <th>姓名</th>
    <th>年龄</th>
  </tr>
  <?php while($user = current($users)): ?>
  <tr>
    <td><?php echo key($users)+1;?></td>
    <td><?php echo $user['name'];?></td>
    <td><?php echo $user['age'];?></td>
  </tr>
  <?php next($users); endwhile ?>
</table>
