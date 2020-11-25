import {
  LinkedList,
  Node
} from './linked_list.js';

class DoublelyNode extends Node {
  constructor(element) {
    super(element);
    // 指向前一个节点
    this.prev = null;
  }
}

export class DoublyLinkedList extends LinkedList {
  constructor() {
    super();
    // 指向尾部的节点
    this.tail = null;
  }

  // 向链表中追加元素
  append(element) {
    const newNode = new DoublelyNode(element);
    if (!this.head) {
      this.head = newNode;
      this.tail = newNode;
    } else {
      // 先找最后一个节点
      this.tail.next = newNode;
      newNode.prev = this.tail;
      // 更改尾部指针
      this.tail = newNode;
    }
    this.length++;
  }

  // 插入元素
  insert(element, position) {
    if (position < 0 || position > this.length) return false;
    const newNode = new DoublelyNode(element);
    // 判断插入情况
    if (position === 0) {
      // 插入到首部
      // 链表为空时
      if (!this.head) {
        this.head = newNode;
        this.tail = newNode;
      } else {
        // 链表不为空时
        newNode.next = this.head;
        this.head.prev = newNode;
        this.head = newNode;
      }
    } else if (position === this.length) {
      // 插入到尾部时
      this.tail.next = newNode;
      newNode.prev = this.tail;
      this.tail = newNode;
    } else {
      // 向中间插入时
      let index = 0;
      let current = this.head;
      while (index++ < position) {
        current = current.next;
      }
      newNode.prev = current.prev;
      newNode.next = current;
      current.prev.next = newNode;
      current.prev = newNode;
    }
    this.length++;
    return true;
  }

  // 删除节点
  removeAt(position) {
    if (position < 0 || position > this.length - 1) return null;
    let current = this.head;
    // 判断删除条件
    if (position === 0) {
      if (this.length === 1) {
        this.head = null;
        this.tail = null;
      } else {
        this.head = this.head.next;
        this.head.prev = null;
      }
    } else if (position === this.length - 1) {
      this.tail = this.tail.prev;
      this.tail.next = null;
      current = this.tail;
    } else {
      let index = 0;
      while (index++ < position) {
        current = current.next;
      }
      current.prev.next = current.next;
      current.next.prev = current.prev;
      current.next = current.prev = null;
    }
    this.length--;
    return current.element;
  }
}