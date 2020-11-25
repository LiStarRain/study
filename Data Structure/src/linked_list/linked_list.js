export class Node {
  constructor(element) {
    // 保存节点数据
    this.element = element;
    // 指向下一个节点
    this.next = null;
  }
}

export class LinkedList {
  constructor() {
    this.head = null;
    this.length = 0;
  }

  // 向链表尾部追加一个节点
  append(element) {
    // 1. 创建节点对象
    const newNode = new Node(element);

    // 2. 追加节点
    if (!this.head) {
      this.head = newNode;
    } else {
      let current = this.head;
      while (current.next) {
        current = current.next;
      }
      current.next = newNode;
    }
    this.length++;
  }

  // 插入节点
  insert(element, position) {
    // 1.判断是否越界
    if (position < 0 || position > this.length) return false;

    // 2.创建新的节点
    const newNode = new Node(element);

    // 3.插入元素
    if (position === 0) {
      newNode.next = this.head;
      this.head = newNode;
    } else {
      let index = 0;
      let current = this.head;
      let previous = null;
      while (index++ < position) {
        previous = current;
        current = current.next;
      }
      previous.next = newNode;
      newNode.next = current;
    }
    this.length++;
    return true;
  }

  // 获取对应位置的元素
  get(position) {
    if (position < 0 || position > this.length - 1) return null;
    let current = this.head,
      index = 0;
    while (index++ < position) {
      current = current.next;
    }
    return current.element;
  }

  // 返回元素再列表中的索引，若链表中没有元素返回-1
  indexOf(element) {
    let current = this.head;
    let index = 0;
    while (current !== null && current.element !== element) {
      current = current.next;
      index++;
    }
    return current === null ? -1 : index;
  }

  // 删除节点
  removeAt(position) {
    if (position < 0 || position > this.length - 1) return null;

    // 删除元素
    let current = this.head;
    let previous = null;
    let index = 0;
    if (position === 0) {
      this.head = current.next;
    } else {
      while (index++ < position) {
        previous = current;
        current = current.next;
      }
      previous.next = current.next;
    }
    this.length--;
    return current;
  }

  update(element, position) {
    // 1. 删除元素
    const result = this.removeAt(position);
    // 2.插入元素
    this.insert(element, position);

    return result;
  }

  remove(element) {
    const index = this.indexOf(element);
    const result = this.removeAt(index);
    return index > -1 ? result : false;
  }

  isEmpty() {
    return this.length === 0;
  }

  size() {
    return this.length;
  }
}