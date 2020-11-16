function getJSON(url) {
  // 返回一个promise对象
  return new Promise((resolve, reject) => {
    // 创建一个HttpRequest对象
    const request = new XMLHttpRequest();
    request.open("GET", url);
    request.onload = function () {
      try {
        if (this.status === 200) {
          resolve(JSON.parse(this.response));
        } else {
          reject(this.status + " " + this.statusText);
        }
      } catch (error) {
        reject(error.message);
      }
    }
    request.onerror = function () {
      reject(this.status + " " + this.statusText);
    }
    // 发送请求
    request.send();
  });
}

export {
  getJSON
};