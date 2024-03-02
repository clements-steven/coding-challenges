# Quick sort

**Quick sort** is a highly efficient sorting algorithm based on the divide and conquer strategy. It works by selecting a pivot element from the array, partitioning the other elements around the pivot, and recursively sorting the resulting sub-arrays.

## Space and time complexity

Quick sort has a time complexity of **O(n log(n)) (guaranteed worst-case performance)** and a space complexity of **O(log n) (recursion stack)**.

## Personal encounters

This challenge problem is included in the **Algorithms** section of [Coding Interview Prep](https://www.freecodecamp.org/learn/coding-interview-prep/) at [Free Code Camp](https://freecodecamp.org).

Familiarity of this algorithm is also encouraged by Microsoft, Google, and Meta's preparation hub.

## How Quick Sort works

1. Partitioning
    - Choose a pivot element (usually the first or last element).
    - Rearrange the array so that all elements less than the pivot are on its left and all elements greater than the pivot are on its right.
2. Recursion
    - Recursively apply `quickSort` to the sub-arrays on the left and right of the pivot.
    - Repeat the partitioning process for each sub-array.
3. Combine
    - Combine the sorted sub-arrays to obtain the final sorted array.

## Advantages

- Efficient for large data sets.
- In-place sorting (no additional memory required).
- Good average-case performance.

## Disadvantages

- Worst-case time complexity can be quadratic.
- Not stable (may change the relative order of equal elements).
