<?php
// Note: You may want to refer to the Node class (https://github.com/clements-steven/coding-challenges/tree/master/node-class) for use in testing this solution.

// Return an array of the values of the nodes in a binary tree using recursive depth-first traversal
function df_values_recursive($root) {
  
  // If the root node is null, return an empty array
  if ($root === null) {
    return [];
  }

  // Recursive functionality
  $leftValues = df_values_recursive($root->get_left());
  $rightValues = df_values_recursive($root->get_right());
  
  // Return the result array
  return [
    $root->get_value(),
    ...$leftValues,
    ...$rightValues
  ];
}

?>
