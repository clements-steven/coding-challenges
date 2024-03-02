<?php

// Sort an array using the selection sort algorithm
function selection_sort($array) {
  // Loop through the array to address each element
  for ($i = 0; $i < count($array) - 1; $i++) {

    // Find the minimum value in the array
    $min = $i; 
    
    // Loop through the array again to find the minimum value
    for ($j = $i + 1; $j < count($array); $j++) {

      // If the current value is less than the minimum value, set the minimum value to the current value
      if ($array[$j] < $array[$min]) {
        $min = $j;
      }
    }

    // Set the current value to a temporary variable
    $temp = $array[$i];

    // Set the current value to the minimum value
    $array[$i] = $array[$min];

    // Set the minimum value to the current value
    $array[$min] = $temp;
  }

  // Return the sorted array
  return $array;
}

?>
