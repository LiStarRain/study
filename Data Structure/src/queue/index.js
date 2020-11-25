import {
  Queue,
  PriorityQueue,
  passGame
} from './queue.js';

// console.log(passGame(['lsr', 'hd', 'lxc', 'oyx'], 2));


// 优先级队列
const queue = new PriorityQueue();

queue.enqueue('lsr', 100);
queue.enqueue('lxc', 80);
queue.enqueue('hd', 90);
console.table(queue.items);
console.log(queue.dequeue());