<?php
// preg_match() 单次匹配
$str = '1@2@3';
// preg_match('/\d+/',$str,$matches);
// print_r($matches);
// preg_match_all()多次匹配全局匹配
// preg_match_all('/\d+/',$str,$matches);
// print_r($matches);
// preg_split()拆分字符串
// $arr = preg_split('/@|#/',$str);
// print_r($arr);
// 字符串替换
// echo preg_replace('/@|#/','-',$str); // 1-2-3
// 回调函数
echo preg_replace_callback('/\d+/',function($matches){
  // print_r($matches[0]);
  if ($matches[0]>2) {
    return $matches[0]+200;
  }
  return $matches[0];
},$str);