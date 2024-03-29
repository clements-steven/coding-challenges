# Quick sort challenge

See the full challenge at [Free Code Camp](https://www.freecodecamp.org/learn/coding-interview-prep/algorithms/implement-quick-sort).

**Quick sort** is an efficient, recursive divide-and-conquer approach to sorting an array. In this method, a pivot value is chosen in the original array. The array is then partitioned into two sub-arrays of values less than and greater than the pivot value. We then combine the result of recursively calling the quick sort algorithm on both sub-arrays. This continues until the base case of an empty or single-item array is reached, which we return. The unwinding of the recursive calls return us the sorted array.

Quick sort is a very efficient sorting method, providing **O(n log(n))** performance on average. It is also relatively easy to implement. These attributes make it a popular and useful sorting method.

## Instructions

Write a function `quickSort` which takes an array of integers as input and returns an array of these integers in sorted order from least to greatest. While the choice of the pivot value is important, any pivot will do for our purposes here. For simplicity, the first or last element could be used.
