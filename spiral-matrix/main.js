/**
 * @param {number[][]} matrix
 * @return {number[]}
 */
var spiralOrder = function (matrix) {
  let result = [];
  let rStart = 0;
  let rEnd = matrix.length - 1;
  let cStart = 0;
  let cEnd = matrix[0].length - 1;

  while (rStart <= rEnd && cStart <= cEnd) {
    for (i = cStart; i <= cEnd; i++) {
      result.push(matrix[rStart][i]);
    }
    rStart++;

    for (i = rStart; i <= rEnd; i++) {
      result.push(matrix[i][cEnd]);
    }
    cEnd--;

    if (rStart <= rEnd) {
      for (i = cEnd; i >= cStart; i--) {
        result.push(matrix[rEnd][i]);
      }
    }
    rEnd--;

    if (cStart <= cEnd) {
      for (i = rEnd; i >= rStart; i--) {
        result.push(matrix[i][cStart]);
      }
    }
    cStart++;
  }
  return result;
};

// Output: [1,2,3,6,9,8,7,4,5]
console.log(
  spiralOrder([
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
  ])
);

// Output: [1,2,3,4,8,12,11,10,9,5,6,7]
console.log(
  spiralOrder([
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
  ])
);

// Output: [1,2,3,4,8,12,16,15,14,13,9,5,6,7,11,10]
console.log(
  spiralOrder([
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16],
  ])
);
