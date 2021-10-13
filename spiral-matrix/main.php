<?php

/**
 * Solution is responsible for providing the answer to:
 *
 * Given an `m x n` matrix, return all elements of the matrix in spiral order.
 *
 * Source: https://leetcode.com/problems/spiral-matrix/
 */
class Solution
{
  /**
   * @param $matrix
   * @return array
   */
  public function spiralOrder(array $matrix): array
  {
    $result = [];
    $rowStart = 0;
    $rowEnd = count($matrix) - 1;
    $columnStart = 0;
    $columnEnd = count($matrix[0]) - 1;

    while ($rowStart <= $rowEnd && $columnStart <= $columnEnd) {
      for ($i = $columnStart; $i <= $columnEnd; $i++) {
        $result[] = $matrix[$rowStart][$i];
      }
      $rowStart++;

      for ($i = $rowStart; $i <= $rowEnd; $i++) {
        $result[] = $matrix[$i][$columnEnd];
      }
      $columnEnd--;

      if ($rowStart <= $rowEnd) {
        for ($i = $columnEnd; $i >= $columnStart; $i--) {
          $result[] = $matrix[$rowEnd][$i];
        }
      }
      $rowEnd--;

      if ($columnStart <= $columnEnd) {
        for ($i = $rowEnd; $i >= $rowStart; $i--) {
          $result[] = $matrix[$i][$columnStart];
        }
      }
      $columnStart++;
    }

    return $result;
  }
}

// 1 2 3
// 4 5 6
// 7 8 9
// 01 02 03 13 23 22 21 11 12
// Output: [1,2,3,6,9,8,7,4,5]
$solution = new Solution();
echo implode(', ', $solution->spiralOrder([[1, 2, 3], [4, 5, 6], [7, 8, 9]])) . PHP_EOL;

// 1  2  3  4
// 5  6  7  8
// 9  10 11 12
// 01 02 03 04 14 24 23 22 21 11 12 13
// Output: [1,2,3,4,8,12,11,10,9,5,6,7]
echo implode(', ', $solution->spiralOrder([[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12]])) . PHP_EOL;

// 1  2  3  4
// 5  6  7  8
// 9  10 11 12
// 13 14 15 16
// Output: [1,2,3,4,8,12,16,15,14,13,9,5,6,7,11,10]
echo implode(', ', $solution->spiralOrder([[1, 2, 3, 4], [5, 6, 7, 8], [9, 10, 11, 12], [13, 14, 15, 16]])) . PHP_EOL;
