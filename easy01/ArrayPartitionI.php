<?php
/**
 * Created by PhpStorm.
 * User: lb
 * Date: 2017/12/30 0030
 * Time: 10:26
 */

/**
 * https://leetcode.com/problems/array-partition-i/description/
 * Given an array of 2n integers, your task is to group these integers into n pairs of integer,
 * say (a1, b1), (a2, b2), ..., (an, bn) which makes sum of min(ai, bi) for all i from 1 to n as large as possible.
 *
 * Example 1:
 * Input: [1,4,3,2]
 *
 * Output: 4
 * Explanation: n is 2, and the maximum sum of pairs is 4 = min(1, 2) + min(3, 4).
 * Note:
 * n is a positive integer, which is in the range of [1, 10000].
 * All the integers in the array will be in the range of [-10000, 10000].
 */

/**
 * @param $arr
 * @return int
 */
function solution($arr)
{
    sort($arr, SORT_NUMERIC);
    $count = count($arr);
    $return = 0;
    for ($i = 0; $i < $count; $i += 2) {
        $return += $arr[$i];
    }

    return $return;
}

print_r(solution([1, 4, 3, 2]));