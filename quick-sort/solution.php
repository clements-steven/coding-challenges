<?php

// Sort an array using the quick sort algorithm
function quick_sort($array) {
  // Edge case
  if (count($array) === 1) {
    return $array;
  }

  // Get the initial pivot value
  $pivot = $array[count($array) - 1];

  // Initialize empty sub-arrays
  $left = [];
  $right = [];
  
  // Loop through the array and fill sub-arrays
  for ($i = 0; $i < count($array) - 1; $i++) {
    if ($array[$i] < $pivot) {
      array_push($left, $array[$i]);
    } else {
      array_push($right, $array[$i]);
    }
  }

  // Recursive functionality
  if (count($left) > 0 && count($right) > 0) {
    return [...quick_sort($left), $pivot, ...quick_sort($right)];
  } else if (count($left) > 0) {
    return [...quick_sort($left), $pivot];
  } else {
    return [$pivot, ...quick_sort($right)];
  }
}

?>
