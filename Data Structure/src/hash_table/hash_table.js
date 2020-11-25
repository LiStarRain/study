const MAX_LOAD_FACTOR = 0.75;
const MIN_LOAD_FACTOR = 0.25;

export function hashFunc(str, max) {
  // 1.定义hashCode
  let hashCode = 0;
  // 2.霍纳算法 eg: 2n^3 + 5n^2 + n + 6 => ((2n+5)n+1)n+6 数字：str.charCodeAt(i)，n：hashCode
  for (let i = 0; i < str.length; i++) {
    hashCode = 31 * hashCode + str.charCodeAt(i);
  }
  hashCode %= max;
  return hashCode;
}

// 效率比较低
// export function isPrime(num) {
//   // 自记忆函数
//   if (!isPrime.answers) {
//     isPrime.answers = {};
//   }
//   if (isPrime.answers[num]) {
//     return isPrime.answers[num]
//   }
//   let prime = num !== 0 && num !== 1; // 1不是质数
//   for (let i = 2; i < num; i++) {
//     if (!(num % i)) {
//       prime = false;
//       break;
//     }
//   }
//   return isPrime.answers[num] = prime;
// }

// 使用因数分解
export function isPrime(num) {
  if (!isPrime.answers) {
    isPrime.answers = {};
  }
  if (isPrime.answers[num]) {
    return isPrime[num];
  }
  let prime = num !== 0 && num !== 1;
  // 1.获取num平方根
  let temp = Math.ceil(Math.sqrt(num));
  // 2.判断范围内有没有num的因数
  for (let i = 2; i < temp; i++) {
    if (!(num % i)) {
      prime = false;
      break;
    }
  }
  return isPrime.answers[num] = prime;
}

export class HashTable {
  constructor() {
    // 数组存储元素
    this.storage = [];
    // 当前存放了多少个元素
    this.count = 0;
    // 可以存储元素的总个数
    this.limit = 7;
  }

  // 哈希函数
  hashFunc(str, max) {
    // 1.定义hashCode
    let hashCode = 0;
    // 2.霍纳算法 eg: 2n^3 + 5n^2 + n + 6 => ((2n+5)n+1)n+6 数字：str.charCodeAt(i)，n：hashCode
    for (let i = 0; i < str.length; i++) {
      hashCode = 31 * hashCode + str.charCodeAt(i);
    }
    hashCode %= max;
    return hashCode;
  }

  // 放入/修改元素
  put(key, value) {
    // 1.根据key映射出index
    const index = this.hashFunc(key, this.limit);
    // 2.取出数组
    let bucket = this.storage[index];
    if (bucket === undefined) {
      bucket = [];
      this.storage[index] = bucket;
    }

    // 3.判断是插入还是修改操作
    let overide = false;
    bucket.forEach(tuple => {
      if (tuple[0] === key) {
        tuple[1] = value;
        overide = true;
      }
    });

    // 4.如果没有覆盖，那就是新增
    if (!overide) {
      bucket.push([key, value]);
      this.count++;

      // 如果装填因子大于指定值，则进行扩容
      if (this.count > this.limit * MAX_LOAD_FACTOR) {
        this.resize(this.getPrime(this.limit * 2));
      }
    }
  }

  // 获取元素
  get(key) {
    // 1.获取索引
    const index = this.hashFunc(key, this.limit);
    // 2.获取bucket
    const bucket = this.storage[index];
    if (bucket === undefined) return null;
    // 3.遍历返回要查找的值
    const result = bucket.find(item => item[0] === key); // find方法找不到会返回undefined
    return result ? result : null;
  }

  // 删除元素
  remove(key) {
    // 1.获取索引
    const index = this.hashFunc(key, this.limit);
    // 2.获取bucket
    const bucket = this.storage[index];
    if (!bucket) return null;
    // 3.遍历bucket找到元素并且将它删除
    let result = null;
    const deleteIndex = bucket.findIndex(item => item[0] === key);
    if (deleteIndex > -1) {
      result = bucket.splice(deleteIndex, 1)[0];
      this.count--;
    }
    if (this.limit >= 7 && this.count < this.limit * MIN_LOAD_FACTOR) {
      this.resize(this.getPrime(Math.floor(this.limit / 2)));
    }
    return result;
  }

  isEmpty() {
    return this.count === 0;
  }

  size() {
    return this.count;
  }

  // 哈希表的扩容
  resize(newLimit) {
    // 1.保存旧的内容
    let oldStorage = this.storage;
    // 2.重置属性
    this.limit = newLimit;
    this.storage = [];
    this.count = 0;
    // 3.取出旧的元素重新放入storage中
    oldStorage.forEach(bucket => {
      if (!bucket) {
        return;
      }
      bucket.forEach(item => {
        this.put(item[0], item[1]);
      });
    });
  }

  isPrime(num) {
    if (!isPrime.answers) {
      isPrime.answers = {};
    }
    if (isPrime.answers[num]) {
      return isPrime[num];
    }
    let prime = num !== 0 && num !== 1;
    // 1.获取num平方根
    let temp = Math.ceil(Math.sqrt(num));
    // 2.判断范围内有没有num的因数
    for (let i = 2; i < temp; i++) {
      if (!(num % i)) {
        prime = false;
        break;
      }
    }
    return isPrime.answers[num] = prime;
  }

  // 获取一个质数
  getPrime(num) {
    while (!isPrime(num)) {
      num++;
    }
    return num;
  }
}