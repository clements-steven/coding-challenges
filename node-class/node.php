<?php

// Node class
class Node {
  // Properties
  public $value;
  public $left;
  public $right;

  // Constructor
  public function __construct($value) {
    $this->value = $value;
    $this->right = null;
    $this->left = null;
  }

  // Get the value of a node
  public function get_value() {
    return $this->value;
  }

  // Get the left node
  public function get_left() {
    return $this->left;
  }

  // Get the right node
  public function get_right() {
    return $this->right;
  }

  // Set the value of a node
  public function set_value($value) {
    if (isset($value)) {
      $this->value = $value;
    }
  }

  // Set the left node
  public function set_left($left) {
    if (isset($left)) {
      $this->left = $left;
    }
  }

  // Set the right node
  public function set_right($right) {
    if (isset($right)) {
      $this->right = $right;
    }
  }
}

// Create nodes
$a = new Node('a');
$b = new Node('b');
$d = new Node('d');
$c = new Node('c');
$e = new Node('e');
$f = new Node('f');

// Set left and right nodes
$a->set_left($b);
$a->set_right($c);
$b->set_left($d);
$b->set_right($e);
$c->set_right($f);

// Create nodes
$g = new Node(5);
$h = new Node(11);
$i = new Node(3);
$j = new Node(4);
$k = new Node(2);
$l = new Node (1);

// Set left and right nodes
$g->set_left($h);
$g->set_right($i);
$h->set_left($j);
$h->set_right($k);
$i->set_right($l);

?>
