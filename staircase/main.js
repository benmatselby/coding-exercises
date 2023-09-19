/**
 * This week's question:
 * You have n equal-sized blocks and you want to build a staircase with them.
 * Return the number of steps you can fully build.
 *
 * Example:
 *
 * buildStaircase(6)
 * 3
 *
 * // #
 * // ##
 * // ###
 *
 * buildStaircase(9)
 * 3 // it takes 10 blocks to make 4 steps
 */
function buildStaircase(blocks) {
  let stairs = 0;
  let blocksUsed = 0;

  while (blocksUsed + stairs < blocks) {
    stairs++;
    blocksUsed += stairs;
  }

  return stairs;
}

const tests = [
  [0, 0], //
  [1, 1], // #
  [2, 1], // # (remainder 1)
  [3, 2], // #,##
  [6, 3], // #,##,###
  [9, 3], // #,##,### (remainder 3, would need 4)
  [10, 4], // #,##,###,####
  [11, 4], // #,##,###,#### (remainder 1, would need 5)
];

tests.forEach((test) => {
  const actual = buildStaircase(test[0]);
  if (actual == test[1]) {
    console.log(`✅ passed for block count ${test[0]} with expected answer of ${test[1]}`);
  } else {
    console.log(`❌ failed for block count ${test[0]} with answer of ${actual}, expected ${test[1]}`);
  }
});
