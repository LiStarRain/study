import {
  assert
} from './tools.js';

// 计算素数
function isPrime(value) {
  // 第一次调用时创建缓存空间
  if (!isPrime.answers) {
    isPrime.answers = {};
  }
  // 检查缓存的值
  if (isPrime.answers[value] !== undefined) {
    return isPrime.answers[value];
  }

  let prime = value !== 0 && value !== 1; // 1 不是素数
  for (let i = 2; i < value; i++) {
    if (value % i === 0) {
      prime = false;
      break;
    }
  }
  return isPrime.answers[value] = prime;
}

assert(isPrime(5), "5 is prime");
assert(isPrime(5), "The answer was cached");