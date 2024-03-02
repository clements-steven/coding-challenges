// Note: You may want to refer to the Node class (https://github.com/clements-steven/coding-challenges/tree/master/node-class) for use in testing this solution.

// Return an array of the values of the nodes in a binary tree using recursive depth-first traversal
const dfValues = (root) => {

  // If the root node is null, return an empty array
  if (root === null) {
    return [];
  }

  // Recursive functionality
  let leftValues = dfValues(root.left);
  let rightValues = dfValues(root.right);

  // Return the result array
  return [root.value, ...leftValues, ...rightValues];
}
