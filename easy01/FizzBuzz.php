<?php
/**
 * Created by leetCode_php.
 * User: lb
 * Date: 2018-01-02 10:09
 * Time: 10:09
 */

/**
 *
 * https://leetcode.com/problems/fizz-buzz/description/
 * Write a program that outputs the string representation of numbers from 1 to n.
 *
 * But for multiples of three it should output “Fizz” instead of the number and for the multiples of five output “Buzz”.
 * For numbers which are multiples of both three and five output “FizzBuzz”.
 *
 * Example:
 *
 * n = 15,
 *
 * Return:
 * [
 *     "1",
 *     "2",
 *     "Fizz",
 *     "4",
 *     "Buzz",
 *     "Fizz",
 *     "7",
 *     "8",
 *     "Fizz",
 *     "Buzz",
 *     "11",
 *     "Fizz",
 *     "13",
 *     "14",
 *     "FizzBuzz"
 * ]
 */


/**
 * @param $n
 * @return array
 */
function solution($n)
{
    $return = [];
    $fizzNum = 3;
    $buzzNum = 5;
    for ($i = 1; $i <= $n; $i++) {
        $return[] = ($i % $fizzNum == 0 && $i % $buzzNum == 0) ? 'FizzBuzz' : (($i % $fizzNum == 0) ? 'Fizz' : ($i % $buzzNum == 0 ? 'Buzz' : $i));
    }

    return $return;
}

var_dump(solution(15));