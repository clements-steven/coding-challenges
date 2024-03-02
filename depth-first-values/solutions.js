// Note: You may want to refer to the Node class (https://github.com/clements-steven/coding-challenges/tree/master/node-class) for use in testing this solution.

// Return an array of the values of the nodes in a binary tree using iterative depth-first traversal
function dfValues(root) {
  // If the root node is null, return an empty array
  if (root === null) {
    return [];
  }

  // Create an empty array to hold the results
  const result = [];

  // Create a stack to hold the nodes
  const stack = [root];

  // Loop through the stack
  while (stack.length > 0) {
    // Pop the last node from the stack
    const current = stack.pop();

    // Add the value of the node to the result array
    result.push(node.value);

    // If the node has a right child, add it to the stack
    if (node.right !== null) {
      stack.push(node.right);
    }

    // If the node has a left child, add it to the stack
    if (node.left !== null) {
      stack.push(node.left);
    }
  }

  // Return the result array
  return result;
}
