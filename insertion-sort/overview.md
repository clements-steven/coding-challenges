# Insertion sort

**Insertion sort** is a straightforward **sorting algorithm** that builds the final sorted array by iteratively placing each element in its correct position. It’s like arranging a deck of playing cards in your hands: you pick up cards one by one and insert them into their proper order.

## Space and time complexity

Insertion sort has a time complexity of **O(n^2) (quadratic time)** and a space complexity of **O(1) (no additional memory required)**.

## Personal encounters

This challenge problem is included in the **Algorithms** section of [Coding Interview Prep](https://www.freecodecamp.org/learn/coding-interview-prep/) at [Free Code Camp](https://freecodecamp.org).

Familiarity of this algorithm is also encouraged by Microsoft, Google, and Meta's preparation hub.

## How Insertion Sort works

1. Initialization
    - Start with an unsorted array.
    - Assume the first element is already sorted (since it is the only element).
2. Iterate and insert
    - For each subsequent element, compare it with the elements before it.
    - If the current element is smaller than the previous one, shift the previous element one position to the right.
    - Repeat this process until your find the correct position for the current element.
3. Repeat until sorted
    - Continue the process for all elements in the array.
    - Gradually, the sorted portion of the array expands until the entire array is sorted.

## Advantages

- Straightforward to understand and implement.
- Performs reasonably well when dealing with small data sets.
- Operates directly on the input array without requiring extra memory space.
- Maintains the relative order of equal elements in the input array.

## Disadvantages

- Inefficient for large data sets due to its quadratic time complexity.
- Insertion is slower compared with more advanced algorithms (such as [quick sort](https://github.com/clements-steven/coding-challenges/tree/master/quick-sort) or [merge sort](https://github.com/clements-steven/coding-challenges/tree/master/merge-sort)).
- Does not adapt well to the initial order of the input.
