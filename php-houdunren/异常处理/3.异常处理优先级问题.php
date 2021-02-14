<?php
class VaildateException extends Exception {

}

try {
  throw new VaildateException('哈哈');
} catch (VaildateException $error) {
  // 这里异常已经被捕获了因此后面就不会再被捕获了
  echo 'ValidateException:'.$error->getMessage();
} catch (Exception $e) {
  echo 'Exception:'.$e->getMessage();
}