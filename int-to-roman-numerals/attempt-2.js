// Source:
// https://leetcode.com/problems/integer-to-roman/
//
// Roman numerals are represented by seven different symbols: I, V, X, L, C,
// D and M.
//
// Symbol       Value
// I             1
// V             5
// X             10
// L             50
// C             100
// D             500
// M             1000
// For example, 2 is written as II in Roman numeral, just two one's added
// together. 12 is written as XII, which is simply X + II. The number 27 is
// written as XXVII, which is XX + V + II.
//
// Roman numerals are usually written largest to smallest from left to right.
// However, the numeral for four is not IIII. Instead, the number four is
// written as IV. Because the one is before the five we subtract it making four.
// The same principle applies to the number nine, which is written as IX.
// There are six instances where subtraction is used:
//
// I can be placed before V (5) and X (10) to make 4 and 9.
// X can be placed before L (50) and C (100) to make 40 and 90.
// C can be placed before D (500) and M (1000) to make 400 and 900.
// Given an integer, convert it to a roman numeral.

// This attempt passes all 3999 unit tests on LeetCode but is really slow.
// Runtime: 181 ms

const integers = ["1000", "900", "500", "400", "100", "90", "50", "40", "10", "9", "5", "4", "1"];
const romans = ["M", "CM", "D", "CD", "C", "XC", "L", "XL", "X", "IX", "V", "IV", "I"];

/**
 * Main function for the application.
 */
function main() {
  console.log("3 = " + intToRoman(3) + " which should be III");
  console.log("4 = " + intToRoman(4) + " which should be IV");
  console.log("8 = " + intToRoman(8) + " which should be VIII");
  console.log("9 = " + intToRoman(9) + " which should be IX");
  console.log("30 = " + intToRoman(30) + " which should be XXX");
  console.log("40 = " + intToRoman(40) + " which should be XL");
  console.log("58 = " + intToRoman(58) + " which should be LVIII");
  console.log("60 = " + intToRoman(60) + " which should be LX");
  console.log("123 = " + intToRoman(123) + " which should be CXXIII");
  console.log("400 = " + intToRoman(400) + " which should be CD");
  console.log("401 = " + intToRoman(401) + " which should be CDI");
  console.log("506 = " + intToRoman(506) + " which should be DVI");
  console.log("1994 = " + intToRoman(1994) + " which should be MCMXCIV");
  console.log("2999 = " + intToRoman(2999) + " which should be MMCMXCIX");
}

// Second attempt, hopefully faster.
function intToRoman(num) {
  result = "";
  for (let i = 0; num; i++) {
    while (num >= integers[i]) {
      result += romans[i];
      num -= integers[i];
    }
  }
  return result;
}

main();
