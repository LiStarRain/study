<?php
// Booelan值 true false
// var_dump(true);
// var_dump(false);

// 数字 非0数字为真，0为假
// var_dump(0.0 == false); // true
// var_dump(12 == true); // true

// 字符串 非空字符串为真，空字符串为假
// var_dump('ame' == true); // true
// var_dump('' == false); // true

var_dump([] == false); // true
var_dump([12] == true); // true
var_dump([12] == 12); // false 这里和js不一样js会取唯一项转为数值比较
var_dump(null == false); // true
// 对象
class Demo {

};
var_dump(new Demo == true); // true