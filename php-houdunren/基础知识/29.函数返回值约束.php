<?php
// 返回值约束 可以没有返回值
function show(): void
{
  echo '哈哈';
}
try {
  show();
} catch (\Throwable $th) {
  echo $th->getMessage();
}