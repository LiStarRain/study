class Node {
  constructor(data) {
    this.data = data;
    this.left = null;
    this.right = null;
  }
}

export class BinarySearchTree {
  constructor() {
    this.root = null;
  }

  // 插入数据
  insert(data) {
    // 1.根据data创建Node节点
    const newNode = new Node(data);
    // 2.如果原来的树是一颗空树
    if (this.root === null) {
      this.root = newNode;
    } else {
      this.insertNode(this.root, newNode);
    }
  }

  insertNode(node, newNode) {
    if (newNode.data > node.data) {
      if (node.right === null) {
        node.right = newNode;
      } else {
        this.insertNode(node.right, newNode);
      }
    } else {
      if (node.left === null) {
        node.left = newNode;
      } else {
        this.insertNode(node.left, newNode);
      }
    }
  }

  // 先序遍历
  preOrderTraverse() {
    this.preOrderTraverseNode(this.root);
  }

  preOrderTraverseNode(node) {
    if (node === null) return;
    console.log(node.data);
    this.preOrderTraverseNode(node.left);
    this.preOrderTraverseNode(node.right);
  }

  // 中序遍历
  inOrderTraverse() {
    this.inOrderTraverseNode(this.root);
  }

  inOrderTraverseNode(node) {
    if (node === null) return;
    this.inOrderTraverseNode(node.left);
    console.log(node.data);
    this.inOrderTraverseNode(node.right);
  }

  // 后序遍历
  overOrderTraverse() {
    this.overOrderTraverseNode(this.root);
  }

  overOrderTraverseNode(node) {
    if (node === null) return;
    this.overOrderTraverseNode(node.left);
    this.overOrderTraverseNode(node.right);
    console.log(node.data);
  }

  // 获取最小值
  min() {
    let node = this.root;
    while (node.left !== null) {
      node = node.left;
    }
    return node.data;
  }

  // 获取最大值
  max() {
    let node = this.root;
    while (node.right !== null) {
      node = node.right;
    }
    return node.data;
  }

  // 搜索特定值
  search(data) {
    return this.searchNode(this.root, data);
  }

  searchNode(node, data) {
    if (node === null) return false;
    if (data < node.data) {
      return this.searchNode(node.left, data);
    } else if (data > node.data) {
      return this.searchNode(node.right, data);
    } else {
      return true;
    }
  }

  // 删除节点
  remove(data) {
    let current = this.root;
    let parent = null;
    let isLeftChildren = true;
    // 1.找到要删除的节点
    while (current.data !== data) {
      parent = current;
      if (data < current.data) {
        isLeftChildren = true;
        current = current.left;
      } else {
        isLeftChildren = false;
        current = current.right;
      }
      if (current === null) return false;
    }

    // 2.找到了节点，根据情况删除节点
    // 情况一：删除的节点是叶子节点
    if (current.left === null && current.right === null) {
      if (current === this.root) {
        this.root = null;
      } else if (isLeftChildren) {
        parent.left = null;
      } else {
        parent.right = null;
      }
    } else if (current.right === null) { // 情况二：要删除的节点有一个子节点
      // 只有左子节点
      if (current === this.root) {
        this.root = current.left;
      } else if (isLeftChildren) {
        parent.left = current.left;
      } else {
        parent.right = current.left;
      }
    } else if (current.left === null) {
      // 只有右子节点
      if (current === this.root) {
        this.root = current.right;
      } else if (isLeftChildren) {
        parent.left = current.right;
      } else {
        parent.right = current.right;
      }
    } else {
      // 要删除的节点有两个子节点
      let successor = this.getSuccessor(current);
      // 判断是否为根节点
      if (this.root === current) {
        this.root = successor;
      } else if (isLeftChildren) {
        parent.left = successor;
      } else {
        parent.right = successor;
      }
      successor.left = current.left;
    }
    return true;
  }

  // 获取后继节点
  getSuccessor(delNode) {
    let parent = delNode;
    let current = delNode.right;
    let successor = delNode;
    // 找右子树的最小值
    while (current !== null) {
      parent = successor;
      successor = current;
      current = current.left;
    }
    // 如果后继节点不是删除节点直接右节点
    if (delNode.right !== successor) {
      parent.left = successor.right;
      successor.right = delNode.right;
    }
    return successor;
  }
}