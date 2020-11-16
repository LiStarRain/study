/* 如果一个事件被频繁触发多次，并且触发的时间间隔过短，则防抖函数可以使得对应的事件处理函数只执行最后触发的一次。
  函数防抖可以把多个顺序的调用合并成一次。
*/
function debounce(callback, scope, delay) {
  let timer = null;
  return function () {
    // 设置函数作用域以及参数
    const context = scope || this,
      args = arguments;
    // 如果事件被触发，清除timer并重新开始计时
    clearTimeout(timer);
    timer = setTimeout(() => {
      callback.apply(context, args);
    }, delay);
  }
}