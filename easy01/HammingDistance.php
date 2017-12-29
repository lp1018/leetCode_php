<?php
/**
 * Created by xunchou.lee
 * User: lb
 * Date: 2017-12-29 11:52
 * Time: 11:52
 */

/**
 *
 * https://leetcode.com/problems/hamming-distance/description/
 *
 * Problem:
 * The Hamming distance between two integers is the number of positions at which the corresponding bits are different.
 * Given two integers x and y, calculate the Hamming distance.
 *
 * Note:
 * 0 ≤ x, y < 2^31.
 *
 * Example:
 *
 * Input: x = 1, y = 4
 *
 * Output: 2
 *
 * Explanation:
 * 1   (0 0 0 1)
 * 4   (0 1 0 0)
 *        ↑   ↑
 *
 * The above arrows point to positions where the corresponding bits are different.
 */

/**
 * time complexity : o(n)
 * @param int $x
 * @param int $y
 * @return int $return bit count
 */
function solution($x, $y)
{
    $bit = $x ^ $y;
    $return = 0;
    while ($bit != 0) {
        $return += $bit & 1;
        $bit >>= 1;
    }
    return $return;
}

print_r(solution(1, 4));