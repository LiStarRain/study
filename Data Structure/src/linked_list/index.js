import {
  LinkedList
} from './linked_list.js';

import {
  DoublyLinkedList
} from './doubly_linked_list'

// const linkedList = new LinkedList();
// linkedList.append('lsr');
// linkedList.insert("abc", 1);
// linkedList.insert("007", 0);
// console.log(linkedList);
// console.log(linkedList.removeAt(0));
// console.log(linkedList.remove('abc'));

// 双向链表测试
const linkedList = new DoublyLinkedList();
linkedList.append('1');
linkedList.append('2');
linkedList.append('3');

linkedList.insert('4', 3);
linkedList.insert('lsr', 1);
console.log(linkedList.removeAt(1));
console.log(linkedList.update('a', 0));
console.log(linkedList.get(0));
console.log(linkedList.remove('a'));
console.log(linkedList);