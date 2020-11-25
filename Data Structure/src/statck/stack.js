export default class Stack {
  constructor() {
    this.items = [];
  }

  push(...elements) {
    this.items.push(...elements);
  }

  pop() {
    return this.items.pop();
  }

  peek() {
    return !this.isEmpty() ? this.items[this.items.length - 1] : null;
  }

  isEmpty() {
    return this.items.length === 0;
  }

  size() {
    return this.items.length;
  }
}

// 十进制转二进制
export function dec2bin(num) {
  if (typeof num !== 'number' || num < 0) throw new TypeError('参数格式错误');
  else if (num === 0) return '0';
  const stack = new Stack();
  while (num > 0) {
    // 取余数
    let remainder = num % 2;
    // 前一次求余的商为后一次的被除数
    num = Math.floor(num / 2);
    // 入栈
    stack.push(remainder);
  }

  // 出栈拼接结果
  let result = '';
  while (!stack.isEmpty()) {
    result += stack.pop();
  }
  return result;
}