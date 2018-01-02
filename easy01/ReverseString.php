<?php
/**
 * Created by leetCode_php.
 * User: lb
 * Date: 2018-01-02 10:36
 * Time: 10:36
 */

/**
 * https://leetcode.com/problems/reverse-string/description/
 * Write a function that takes a string as input and returns the string reversed.
 *
 * Example:
 * Given s = "hello", return "olleh".
 */


/**
 * @param $str
 * @return string
 */
function solution1($str)
{
    $len = strlen($str);
    $returnStr = '';
    for ($i = 0; $i < $len; $i++) {
        $returnStr = $str[$i] . $returnStr;
    }
    return $returnStr;
}

/**
 * @param $str
 * @return string
 */
function solution2($str)
{
    $len = strlen($str);
    $i = 0;
    $j = $len - 1;
    while ($i < $j) {
        $temp = $str[$j];
        $str[$j] = $str[$i];
        $str[$i] = $temp;
        $i++;
        $j--;
    }
    return $str;
}

$str = 'hello';
var_dump(solution1($str));
var_dump(solution2($str));
