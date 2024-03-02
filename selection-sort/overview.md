# Selection sort

**Selection sort** is a simple and efficient **sorting algorithm** that works by repeatedly selecting the smallest (or largest) element from the unsorted portion of the list and moving it to the sorted portion of the list.

## Space and time complexity

Bubble sort has a time complexity of **O(n^2) (quadratic time)** and a space complexity of **O(1) (no additional memory required)**.

## Personal encounters

This challenge problem is included in the **Algorithms** section of [Coding Interview Prep](https://www.freecodecamp.org/learn/coding-interview-prep/) at [Free Code Camp](https://freecodecamp.org).

Familiarity of this algorithm is also encouraged by Microsoft, Google, and Meta's preparation hub.

## How Selection Sort works

1. Initialization
    - Start with an unsorted array.
    - Divide the array into two parts: the **sorted part** (initially empty) and the **unsorted part** (the entire array).
2. Select the minimum (or maximum)
    - In each iteration, find the minimum (or maximum) element from the unsorted part of the array.
    - Swap this element with the first element in the unsorted part.
3. Repeat until sorted
    - Continue this process for the remaining unsorted elements.
    - In each iteration, one element is moved from the unsorted part to the sorted part.
    - Repeat until the entire array is sorted.

## Advantages

- Straightforward to understand and implement.
- Performs reasonably well when dealing with small data sets.
- Operates directly on the input array without requiring extra memory space.

## Disadvantages

- Becomes inefficient for larger data sets.
- Selection sort is slower when compared with more advanced algorithms (such as [quick sort](https://github.com/clements-steven/coding-challenges/tree/master/quick-sort) or [merge sort](https://github.com/clements-steven/coding-challenges/tree/master/merge-sort)).
- Does not adapt well to the initial order of the input.
