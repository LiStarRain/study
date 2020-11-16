import {
  getJSON
} from "./getJSON.js";
// 将异步变同步原理（利用生成器的让渡挂起状态的特性）
function* getData(url) {
  try {
    // 获取数据
    const ninjias = yield getJSON(url);
    const missions = yield getJSON(ninjias[0].missionsUrl);
    const missionDescription = yield getJSON(missions[0].detailsUrl);
  } catch (error) {
    console.log(error.message);
  }
}

function async (generator, url = "http://wasser.net.cn") {
  // 创建一个迭代器来控制生成器值的产生
  const iterator = generator(url);
  // 对生成器产生的值进行处理
  function handle(iteratorResult) {
    // 如果生成器完成了值的生成。则直接退出处理函数
    if (iteratorResult.done) return;
    const iteratorValue = iteratorResult.value;
    if (iteratorValue instanceof Promise) {
      iteratorValue.then(res => handle(iterator.next(res))).catch(err => iterator.throw(err));
    }
  }

  try {
    handle(iterator.next());
  } catch (error) {
    iterator.throw(error);
  }
}

async (getData);