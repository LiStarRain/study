// 导出模块
const MouseCounterModule = (function () {
  // 定义私有变量
  let count = 0;
  // 创建私有函数
  function handleClick() {
    console.log(++count);
  }

  // 返回一个对象，代表模块的接口，通过闭包，可以访问模块私有变量和方法
  return {
    countClicks: () => {
      document.addEventListener("click", handleClick);
    }
  }
})();


// 增强模块
(function () {
  let numMoves = 0;
  const handleMoves = function () {
    console.log(++numMoves);
  };

  MouseCounterModule.countMoves = () => {
    document.addEventListener("mousemove", handleMoves);
  };
})(MouseCounterModule);
MouseCounterModule.countMoves();
// 缺点：两次闭包内的私有变量都是在自己的作用域中创建的，是完全私有的，通过模块扩展无法共享模块的私有变量
