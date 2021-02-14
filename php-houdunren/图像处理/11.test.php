<?php
session_start();
$userData = $_POST['captcha'];
$code = $_SESSION['captcha'];
if (strtolower($userData) == strtolower($code)) {
  echo '成功';
} else {
  echo '失败';
}