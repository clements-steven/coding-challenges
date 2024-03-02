# Depth-first values

**Depth-First Search (DFS)** is a technique used for traversing binary trees (and other data structures like graphs). It explores branches of the tree by going as deep as possible down each branch before backtracking and moving on to the next branch.

## Iterative approach

The iterative approach typically employs a `for` or `while` loop to iteratively traverse the tree and perform some operation. In this case, to print out the value of each node in the binary tree.

## Recursive approach

DFS is typically implemented using recursion. For each traversal type, we define a recursive function that follows the specified order of visiting nodes.

## Time and space complexity

DFS has a time complexity of **O(n) (linear time)** and a space complexity of **O(n) (linear space)**.

## Personal encounters

This challenge problem is included in the [Binary Tree Algorithms for Technical Interviews](https://www.youtube.com/watch?v=fAAZixBzIAI) YouTube video from [Free Code Camp](https://freecodecamp.org).

Familiarity of this algorithm is also encouraged by Microsoft, Google, and Meta's preparation hub.

## Advantages

- Requires less memory compared to breadth-first search (BFS).
- Useful for certain problems, like finding connected components or paths.

## Disadvantages

- May not find the shortest path (unlike BFS).
- Can get stuck in infinite loops if cycles exist (in graphs).
