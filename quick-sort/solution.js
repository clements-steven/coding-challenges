// Sort an array using the quick sort algorithm
const quickSort = array => {
  // Edge case
  if (array.length === 1) {
    return array;
  }
  
  // Get the initial pivot value
  let pivot = array[array.length - 1];

  // Initialize empty sub-arrays
  let left = [];
  let right = [];
  
  // Loop through the array and fill sub-arrays
  for (let i = 0; i < array.length - 1; i++) {
    if (array[i] < pivot) {
      left.push(array[i]);
    } else {
      right.push(array[i]);
    }
  }
  
  // Recursive functionality
  if (left.length > 0 && right.length > 0) {
    return [...quickSort(left), pivot, ...quickSort(right)];
  } else if (left.length > 0) {
    return [...quickSort(left), pivot];
  } else {
    return [pivot, ...quickSort(right)];
  }
}
