/**
 *
 * Given an array of integers, sort them into two separate sorted arrays of even and odd numbers. If you see a zero, skip it.
 *
 * > separateAndSort([4,3,2,1,5,7,8,9])
 * > [[2,4,6], [1,3,5,7,9]]
 *
 * > separateAndSort([1,1,1,1])
 * > [[], [1,1,1,1]]
 */
function separateAndSort(numbers) {
  const odd = [];
  const even = [];
  numbers.forEach((number) => {
    if (number == 0) {
      return;
    }

    if (number % 2 == 0) {
      even.push(number);
    } else {
      odd.push(number);
    }
  });

  return [even.sort(), odd.sort()];
}

console.log(separateAndSort([4, 3, 2, 1, 5, 7, 8, 9]));
// [ [ 2, 4, 8 ], [ 1, 3, 5, 7, 9 ] ]
console.log(separateAndSort([1, 1, 1, 1]));
// [ [], [ 1, 1, 1, 1 ] ]
console.log(separateAndSort([1, 1, 1, 0, 2, 1]));
// [ [ 2 ], [ 1, 1, 1, 1 ] ]
