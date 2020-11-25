export class Queue {
  constructor() {
    this.items = [];
  }

  enqueue(...element) {
    this.items.push(...element);
  }

  dequeue() {
    return this.items.shift();
  }

  // 查看队首元素
  front() {
    if (this.items.length) {
      return this.items[0];
    } else {
      return null;
    }
  }

  isEmpty() {
    return this.items.length === 0;
  }

  size() {
    return this.items.length;
  }
}

class QueueElement {
  constructor(element, priority) {
    this.element = element;
    this.priority = priority;
  }
}

// 优先级队列
export class PriorityQueue extends Queue {
  constructor() {
    super();
  }

  enqueue(element, priority) {
    // 1. 创建队列元素对象
    const queueElement = new QueueElement(element, priority);

    // 2. 插入元素对象
    if (this.isEmpty()) {
      this.items.push(queueElement);
    } else {
      const index = this.items.findIndex(item => item.priority > queueElement.priority);
      index > -1 ? this.items.splice(index, 0, queueElement) : this.items.push(queueElement);
    }
  }
}


// 从0开始数
export function passGame(nameArray, targetNum) {
  // 1. 创建队列
  const queue = new Queue();

  // 2. 依次入队
  while (nameArray.length) {
    queue.enqueue(nameArray.pop());
  }
  console.log(queue.items);

  while (queue.size() > 1) {
    // 当数到那个数字的时候被淘汰，出队，否则出队后又入队
    for (let i = 0; i < targetNum; i++) {
      queue.enqueue(queue.dequeue());
    }
    queue.dequeue();
    console.log(queue.items);
  }
  return queue.front();
}