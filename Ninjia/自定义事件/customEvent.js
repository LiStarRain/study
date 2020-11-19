function triggleEvent(target, eventName, detail) {
  const customeEvent = new CustomEvent(eventName, {
    detail,
    // 是否冒泡
    bubbles: true,
    // 是否可以取消
    cancelable: true
  });
  target.dispatchEvent(customeEvent);
}

function getData(url = "./data.json") {
  triggleEvent(document, "start", {
    msg: "开始"
  });
  return fetch(url).then((response) => {
    triggleEvent(document, "end", {
      msg: "结束"
    });
    return response.json();
  });
}

document.addEventListener("start", function () {
  console.log("请求开始");
});

document.addEventListener("end", function () {
  console.log("请求结束");
});