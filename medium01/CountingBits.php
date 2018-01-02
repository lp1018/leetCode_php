<?php
/**
 * Created by leetCode_php.
 * User: lb
 * Date: 2018-01-02 11:38
 * Time: 11:38
 */

/**
 * https://leetcode.com/problems/counting-bits/description/
 * Given a non negative integer number num.
 * For every numbers i in the range 0 ≤ i ≤ num calculate the number of 1's in their binary representation and return them as an array.
 *
 * Example:
 * For num = 5 you should return [0,1,1,2,1,2].
 *
 * Follow up:
 *
 * It is very easy to come up with a solution with run time O(n*sizeof(integer)).
 * But can you do it in linear time O(n) /possibly in a single pass?
 * Space complexity should be O(n).
 * Can you do it like a boss?
 * Do it without using any builtin function like __builtin_popcount in c++ or in any other language.
 */

/**
 * @param $num
 * @return array
 */
function solution1($num)
{
    // 6 0110  5 0101
    // 3 0011  2 0010
    $return = [0];
    for ($i = 1; $i <= $num; $i++) {
        $return[$i] = $return[$i >> 1];
        if ($i % 2 == 1) {
            $return[$i]++;
        }
    }
    return $return;
}

function solution2($num)
{
    $return = [0];
    for ($i = 1; $i <= $num; $i++) {
        $return[$i] = $return[$i >> 1] + ($i & 1);
    }
    return $return;
}

var_dump(solution1(20));
var_dump(solution2(20));