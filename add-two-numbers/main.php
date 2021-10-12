<?php

/**
 * Definition of a ListNode from LeetCode.
 */
class ListNode {
  public $val = 0;
  public $next = null;
  function __construct($val = 0, $next = null) {
    $this->val = $val;
    $this->next = $next;
  }
}

/**
 * Solution is responsible for housing the logic to add two numbers defined
 * in a Linked List.
 *
 * Source: https://leetcode.com/problems/add-two-numbers/
 */
class Solution {
  /**
   * @param ListNode $l1
   * @param ListNode $l2
   * @return ListNode
   */
  public function addTwoNumbers($l1, $l2): ListNode
  {
    $carry = 0;
    $sum = $l1->val + $l2->val;

    if ($sum > 9) {
      $carry = 1;
    }

    $result = new ListNode($sum % 10);

    $l1 = $l1->next;
    $l2 = $l2->next;
    $temp = $result;

    while (($l1 || $l2) && $temp) {
      $sum = $l1->val + $l2->val + $carry;
      $carry = $sum > 9 ? 1 : 0;

      $temp->next = new ListNode($sum % 10);

      $l1 = $l1->next;
      $l2 = $l2->next;
      $temp = $temp->next;
    }

    if ($carry !== 0) {
      $temp->next = new ListNode($carry);
    }

    return $result;
  }
}

// Should return 3 1
$sol = new Solution();
echo "4 + 4 = 8 == " . var_export($sol->addTwoNumbers(
  new ListNode(4),
  new ListNode(4)
), 1) .PHP_EOL.PHP_EOL.PHP_EOL;

// Should return 3 1
$sol = new Solution();
echo "6 + 7 = 13 == " . var_export($sol->addTwoNumbers(
  new ListNode(6),
  new ListNode(7)
), 1) .PHP_EOL.PHP_EOL.PHP_EOL;

// Should return 0 2
$sol = new Solution();
echo "11 + 9 = 20 == " . var_export($sol->addTwoNumbers(
  new ListNode(1, new ListNode(1)),
  new ListNode(9)
), 1) .PHP_EOL.PHP_EOL.PHP_EOL;

// Should return 7 0 8
$sol = new Solution();
echo "342 + 465 = 807 == " . var_export($sol->addTwoNumbers(
  new ListNode(2, new ListNode(4, new ListNode(3))),
  new ListNode(5, new ListNode(6, new ListNode(4)))
), 1) .PHP_EOL.PHP_EOL.PHP_EOL;

// Should return 7 0 9 8
$sol = new Solution();
echo "1289 + 7618 = 8907 == " . var_export($sol->addTwoNumbers(
  new ListNode(9, new ListNode(8, new ListNode(2, new ListNode(1)))),
  new ListNode(8, new ListNode(1, new ListNode(6, new ListNode(7))))
), 1) .PHP_EOL.PHP_EOL.PHP_EOL;

// Should return 7 0 9 8
$sol = new Solution();
echo "98713 + 98713 = 197426 == " . var_export($sol->addTwoNumbers(
  new ListNode(3, new ListNode(1, new ListNode(7, new ListNode(8, new ListNode(9))))),
  new ListNode(3, new ListNode(1, new ListNode(7, new ListNode(8, new ListNode(9)))))
), 1) .PHP_EOL.PHP_EOL.PHP_EOL;
