// Sort an array using the selection sort algorithm
const selectionSort = array => {
  // Loop through the array to address each element
  for (let i = 0; i < array.length - 1; i++) {

    // Find the minimum value in the array
    let min = i;

    // Loop through the array again to find the minimum value
    for (let j = i + 1; j < array.length; j++) {

      // If the current value is less than the minimum value, assign the current value to the minimum value
      if (array[j] < array[min]) {
        min = j;
      }
    }

    // Set the current value to a temporary variable
    let temp = array[i];

    // Set the current value to the minimum value
    array[i] = array[min];

    // Set the minimum value to the current value
    array[min] = temp;
  }
  
  // Return the sorted array
  return array;
}
