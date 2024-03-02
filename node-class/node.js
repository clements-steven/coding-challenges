// Node class
class Node {

  // Constructor
  constructor(value) {
    this.value = value;
    this.left = null;
    this.right = null;
  }
}

// Create nodes
const a = new Node('a');
const b = new Node('b');
const c = new Node('c');
const d = new Node('d');
const e = new Node('e');
const f = new Node('f');

// Set left and right nodes
a.left = b;
a.right = c;
b.left = d;
b.right = e;
c.right = f;

// Create nodes
const g = new Node('g');
const h = new Node('h');
const i = new Node('i');
const j = new Node('j');
const k = new Node('k');
const l = new Node('l');

// Set left and right nodes
g.left = h;
g.right = i;
h.left = j;
h.right = k;
i.right = l;
