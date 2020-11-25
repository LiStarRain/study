import {
  hashFunc,
  HashTable,
  isPrime
} from './hash_table.js';

// console.log(hashFunc('name', 11));
// console.log(hashFunc('lsr', 11));
// console.log(hashFunc('oxy', 11));

const hashTable = new HashTable();
hashTable.put('name', 'lsr');
hashTable.put('age', 22);
hashTable.put('height', 178);
// hashTable.put('hobby', 'game');
// hashTable.put('skill', 'sleep');
// hashTable.put('sex', 'male');
// hashTable.put('score', 100);
// console.log(hashTable);
// console.log(hashTable.get('name'));
console.log(hashTable);
console.log(hashTable.remove('height'));
console.log(hashTable.remove('age'));
console.log(hashTable);
// console.log(hashTable.size());
// console.log(hashTable.isEmpty());
// console.log(isPrime(111));
// console.dir(isPrime);