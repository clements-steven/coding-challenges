# Merge sort

**Merge Sort** is a divide-and-conquer **sorting algorithm** that efficiently sorts an array by breaking it down into smaller sub-arrays, sorting each sub-array, and then merging the sorted sub-arrays back together to produce the final sorted array.

## Space and time complexity

Merge sort has a time complexity of **O(n log(n)) (guaranteed worst-case performance)** and a space complexity of **O(n) (linear)**.

## Personal encounters

This challenge problem is included in the **Algorithms** section of [Coding Interview Prep](https://www.freecodecamp.org/learn/coding-interview-prep/) at [Free Code Camp](https://freecodecamp.org).

Familiarity of this algorithm is also encouraged by Microsoft, Google, and Meta's preparation hub.

## How Merge Sort works

1. Divide
    - Start with an unsorted array.
    - Continuously divide the array into two halves until each sub-array contains only one element (an array with one element is always considered sorted).
2. Conquer (Sort)
    - Sort each of the smaller sub-arrays.
    - This sorting process is done recursively.
3. Merge
    - Merge the sorted sub-arrays back together to create larger sorted sub-arrays.
    - Repeat the merging process until the entire array is sorted.

## Advantages

- Efficient for large datasets since it does not repeatedly traverse an entire array.
- Ensures predictable performance by consistently carrying out different stages with a similar time complexity.
- Ideal for linked lists and external sorting scenarios.

## Disadvantages

- Requires additional memory space to store temporary sub-arrays during the merging process.
- Merge sort is no in-place. It creates new arrays during the merging phases, which can impact memory use.
- Relies on recursion, which may lead to stack overflow for extremely large arrays.
