// 函数节流保证一个事件一定时间内只执行一次
// 1.利用时间戳实现
function throttle(callback, threshold, scope) {
  // 函数执行前的时间毫秒数
  let prev = Date.now();
  return function () {
    // 设置函数作用域以及参数
    const context = scope || this,
      args = arguments;
    let now = Date.now();
    // 这里形成了闭包
    if (now - prev >= threshold) {
      prev = now;
      callback.apply(context, args);
    }
  }
}

// 2. 利用定时器实现
function throttle2(callback, threshold, scope) {
  // 初始化定时器ID
  let timer = null;
  return function () {
    // 设置函数作用域以及参数
    const context = scope || this,
      args = arguments;
    // 如果没有设置过定时器
    if (!timer) {
      timer = setTimeout(() => {
        callback.apply(context, args);
      }, threshold);
    }
  }
}