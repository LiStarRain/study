<?php
// 把验证码得值存入session
session_start(); // session_start()之前不能有输出
include './Captcha.php';
$captcha = new Captcha(100,60,4);
$code = $captcha->render();
// file_put_contents('10.验证码.txt',$code);
$_SESSION['captcha'] = $code;
