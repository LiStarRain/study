<?php
// 常量
// define(name. value) 定义常量 第三个参数表示是否不区分大小写
// define('NAME', 'ame', false);
// echo NAME; // ame
// const NAME = 'ame';
// echo NAME; // ame
// const DATA = [1,2,3];
// print_r(DATA);


// 常量不受访问限制
// const NAME = 'ame';
// function test() {
//   print_r(NAME);
// }
// test(); // ame

// 检测某个常量是否存在
// define('NAME','ame');
// var_dump(defined('NAME'));

// 系统常量
// echo PHP_VERSION; // php版本
// echo PHP_OS; // 操作系统
const NAME = 'ame';
print_r(get_defined_constants(true)['user']); // 查看用户已经定义的常量