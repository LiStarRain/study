<?php
class LoginException extends Exception {

}

class UploadException extends Exception {

}

try {
  // throw new LoginException('login error',403);
  throw new UploadException('login error',403);
} catch (LoginException $e) {
  // echo '333';
} catch (UploadException $e) {
  echo '444';
} finally {
  // 不管是否异常都会执行
  echo '哈哈哈';
}