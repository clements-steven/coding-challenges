// Sort an array using the insertion sort algorithm
const insertionSort = array => {

  // Loop through the array to address each element
  for (let i = 1; i < array.length; i++) {

    // Loop through the array to compare the current element with its preceding elements
    for (let j = i; j > 0; j--) {

      // Swap the elements if the current element is less than the preceding element
      if (array[j] < array[j - 1]) {

        // Create a temporary variable to hold the current element
        let temp = array[j];

        // Swap the current element with the preceding element
        array[j] = array[j - 1];

        // Assign the temporary variable to the preceding element
        array[j - 1] = temp;
      }
    }
  }

  // Return the sorted array
  return array;
}
