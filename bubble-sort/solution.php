<?php

// Sort an array using the bubble sort algorithm
function bubble_sort($array) {

  // Loop through the array to address each element
  for ($i = 0; $i < count($array) - 1; $i++) {
    
    // Loop through the array to compare the current element with its proceeding elements
    for ($j = 0; $j < count($array) - 1 - $i; $j++) {
      
      // Swap the elements if the current element is greater than the proceeding element
      if ($array[$j] > $array[$j + 1]) {
        
        // Create a temporary variable to hold the current element
        $temp = $array[$j];
        
        // Swap the current element with the proceeding element
        $array[$j] = $array[$j + 1];
        
        // Assign the temporary variable to the proceeding element
        $array[$j + 1] = $temp;
      }
    }
  }

  // Return the sorted array
  return $array;
}

?>
