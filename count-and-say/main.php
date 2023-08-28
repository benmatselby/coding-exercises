<?php

/**
 * This week's question:
 * Given a sequence of numbers, generate a "count and say" string.
 *
 * Example:
 *
 * > countAndSay(112222555)
 * > "two 1s, then four 2s, then three 5s"
 *
 * > countAndSay(3333333333)
 * > "ten 3s"
 *
 * Source: https://buttondown.email/cassidoo/archive/a-ship-in-port-is-safe-but-thats-not-what-ships/
 */

/**
 * This function will take the number it's been given and then return
 * a string'd version counting the number of times a number appears in sequence
 */
function countAndSay(int $number): string
{
  $counter = [];

  foreach (str_split($number) as $char) {
    if (isset($counter[$char])) {
      $counter[$char]++;
    } else {
      $counter[$char] = 1;
    }
  }

  $response = '';
  for ($i = 0; $i < count($counter); $i++) {
    if ($i != 0) {
      $response .= ', then ';
    }

    $response .= mapNumberToWord(array_values($counter)[$i]) . ' ' . array_keys($counter)[$i] . 's';
  }

  return $response;
}

/**
 * Given a number such as 2, then return a string'd version of that number,
 * e.g. two
 *
 * Note, this only goes up to 10, but you could extend it to go higher, or
 * use a package. This felt outside the scope of the question :)
 */
function mapNumberToWord(int $number): string
{
  $map = [
    "1" => "one",
    "2" => "two",
    "3" => "three",
    "4" => "four",
    "5" => "five",
    "6" => "six",
    "7" => "seven",
    "8" => "eight",
    "9" => "nine",
    "10" => "ten",
  ];

  return $map[$number] ?? $number;
}

echo countAndSay(112222555) . PHP_EOL;
// two 1s, then four 2s, then three 5s
echo countAndSay(3333333333) . PHP_EOL;
// ten 3s
echo countAndSay(33333333333) . PHP_EOL;
// 11 3s
