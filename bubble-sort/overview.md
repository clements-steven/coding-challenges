# Bubble sort

**Bubble sort** is a simple **sorting algorithm** that works by repeatedly swapping adjacent elements if they are in the wrong order. Although it’s straightforward to understand and implement, it’s *not* suitable for large data sets due to its relatively high average and worst-case time complexity.

## Space and time complexity

Bubble sort has a time complexity of **O(n^2) (quadratic time)** and a space complexity of **O(1) (no additional memory required)**.

## Personal encounters

This challenge problem is included in the **Algorithms** section of [Coding Interview Prep](https://www.freecodecamp.org/learn/coding-interview-prep/) at [Free Code Camp](https://freecodecamp.org).

Familiarity of this algorithm is also encouraged by Microsoft, Google, and Meta's preparation hub.

## How Bubble Sort works

1. Comparison and swapping
    - Start from the leftmost element of the array.
    - Compare each element with the one next to it.
    - If the current element is greater than the next element, swap them.
    - Continue this process until you reach the end of the array.
2. The largest element bubbles up
    - After the first pass, the largest element will have “bubbled up” to the rightmost position.
    - Repeat the process for the remaining elements, excluding the last one (since it’s already in its correct position).
3. Repeat until sorted
    - Continue the process for each remaining pass.
    - In each pass, the next largest element will find its correct position.
    - Repeat until the entire array is sorted.

## Advantages

- Easy to understand and implement.
- Stable sorting algorithm (maintains the relative order of equal elements).

## Disadvantages

- Slow for large data sets due to its quadratic time complexity.
- Requires a comparison operator for element ordering.
- Not recommended for practical use with large data sets.
