<?php

// Helper function to merge two sorted arrays
function merge($left, $right) {
  // Initialize output array
  $output = [];

  // Create indices
  $l = 0;
  $r = 0;

  // Loop through the arrays
  while ($l < count($left) && $r < count($right)) {
    $lValue = $left[$l];
    $rValue = $right[$r];

    // Determine the lower value
    if ($lValue < $rValue) {
      array_push($output, $lValue);
      $l++;
    } else {
      array_push($output, $rValue);
      $r++;
    }
  }

  // Return the output and remaining values
  return [...$output, ...array_slice($left, $l), ...array_slice($right, $r)];
}

// Sort an array using the merge sort algorithm
function merge_sort($array) {
  // Edge case
  if (count($array) <= 1) {
    return $array;
  }

  // Determine the middle index
  $mid = floor(count($array) / 2);

  // Create two sub-arrays
  $left = array_slice($array, 0, $mid);
  $right = array_slice($array, $mid, count($array));

  // Sort and merge the arrays
  return merge(
    merge_sort($left),
    merge_sort($right)
  );
}

?>
