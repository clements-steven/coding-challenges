<?php
// Note: You may want to refer to the Node class (https://github.com/clements-steven/coding-challenges/tree/master/node-class) for use in testing this solution.

// Return an array of the values of the nodes in a binary tree using iterative depth-first traversal
function df_values($root) {

  // If the root node is null, return an empty array
  if ($root === null) {
    return [];
  }

  // Create an empty array to hold the result
  $result = [];

  // Create a stack to hold the nodes
  $stack = [$root];

  // Loop through the stack
  while(count($stack) > 0) {

    // Pop the last node from the stack
    $current = array_pop($stack);

    // Add the value of the current node to the result array
    array_push($result, $current->get_value());

    // If the current node has a right child, push it to the stack
    if ($current->get_right() !== null) {
      array_push($stack, $current->get_right());
    }
    // If the current node has a left child, push it to the stack
    if ($current->get_left() !== null) {
      array_push($stack, $current->get_left());
    }
  }

  // Return the result array
  return $result;
}

?>
