// 原型继承方法，构造函数来继承属性
function extend(sub, sup) {
  // 创建一个以父类构造函数原型为原型的空对象，并将它设置为子类构造函数的原型
  sub.prototype = Object.create(sup.prototype);
  // 由于重写了子类的原型，此时要恢复原型的constructor属性，让他指向构造函数
  Object.defineProperty(sub.prototype, 'constructor', {
    value: sub,
    // 原型中的constructor是不可遍历的
    enumerable: false,
    writable: true
  });
  // 继承静态属性和方法 将子类构造函数对象的原型设置为父类构造函数对象
  Object.setPrototypeOf(sub, sup);
}

function User(name, age) {
  // 初始化属性
  this.name = name;
  this.age = age;
}
// 静态属性
User.VERSION = '1.0';
// 静态方法
User.compareAge = function (userArray, asc = true) {
  return asc ? userArray.sort((pre, cur) => pre.age - cur.age) : userArray.sort((pre, cur) => cur.age - pre.age);
};
// 原型方法
User.prototype.show = function () {
  console.log(`姓名：${this.name}----年龄：${this.age}`);
};

function Admin(name, age, authorize) {
  // 调用父级的构造函数
  User.call(this, name, age);
  this.authorize = authorize;
}
Admin.VERSION = '2.0';
// 实现继承
extend(Admin, User);

// 测试
const user1 = new User('lsr', 22);
const user2 = new User('oyx', 99);
const admin1 = new Admin('lxc', 23, 'student');
console.log(Admin.VERSION);
console.log(admin1.authorize);
admin1.show();
// 调用父类的静态方法
console.log(Admin.compareAge([user1, user2], asc = false));
console.dir(Admin);