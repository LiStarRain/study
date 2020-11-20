class User {
  // 静态属性，添加到了构造函数对象中
  static VERSION = '1.0';
  // 构造函数
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }
  // 原型方法，他会自动添加到构造函数的原型对象中
  show() {
    console.log(`姓名：${this.name}----年龄：${this.age}`);
  }
  // 静态方法，添加到了构造函数对象中
  static compareAge(userArray, asc = true) {
    return asc ? userArray.sort((pre, cur) => pre.age - cur.age) : userArray.sort((pre, cur) => cur.age - pre.age);
  }
}

// 继承
class Admin extends User {
  constructor(name, age, authorize) {
    // 用 super 来进行原型攀升
    super(name, age);
    this.authorize = authorize;
  }
  sayHi() {
    console.log("I am Admin");
  }
}

// 测试
const user = new User('lsr', 22);
const admin = new Admin('马保国', 69, '掌门人');
user.show();
admin.show();
console.log(Admin.compareAge([user, admin], asc = false));