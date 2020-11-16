import {
  assert
} from './tools.js';

// 存储唯一的函数集合
const store = {
  // 跟踪下一个要被赋值的ID
  nextId: 1,
  // 缓存
  cache: {},
  // 仅当函数唯一时才向缓存中添加函数
  add(fn) {
    if (!fn.id) {
      fn.id = this.nextId++;
      this.cache[fn.id] = fn;
      return true;
    }
  }
};

function ninjia() {}

assert(store.add(ninjia), "add success");
assert(store.add(ninjia), "add success");