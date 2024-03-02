// Helper function to merge two sorted arrays
const merge = (left, right) => {
  // Initialize the output array
  let output = [];

  // Create indices
  let l = 0;
  let r = 0;

  // Loop through the arrays
  while (l < left.length && r < right.length) {
    let lValue = left[l];
    let rValue = right[r];

    // Determine the lower value
    if (lValue < rValue) {
      output.push(lValue);
      l++
    } else {
      output.push(rValue);
      r++
    }
  }

  // Return the output and remaining values
  return [...output, ...left.slice(l), ...right.slice(r)];
}

// Sort an array using the merge sort algorithm
const mergeSort = array => {
  // Edge case
  if (array.length <= 1) {
    return array;
  }

  // Determine the middle index
  let mid = Math.floor(array.length / 2);

  // Create two sub-arrays
  let left = array.slice(0, mid);
  let right = array.slice(mid, array.length);

  // Sort and merge the arrays
  return merge(
    mergeSort(left),
    mergeSort(right)
  );
}
