<?php
/**
 * Created by PhpStorm.
 * User: lb
 * Date: 2017/12/31 0031
 * Time: 11:10
 */

/**
 *
 * Given a string, you need to reverse the order of characters in each word within a sentence while still preserving whitespace and initial word order.
 *
 * Example 1:
 * Input: "Let's take LeetCode contest"
 * Output: "s'teL ekat edoCteeL tsetnoc"
 * Note: In the string, each word is separated by single space and there will not be any extra space in the string.
 */


/**
 * @param $str
 * @return string
 */
function solution1($str)
{
    $arr = explode(' ', $str);
    foreach ($arr as $key => $value) {
        $arr[$key] = strrev($value);
    }
    return implode(' ', $arr);
}

/**
 * @param $str
 * @return string
 */
function solution2($str)
{
    $len = strlen($str);

    $division = [];
    for ($i = 0; $i < $len; $i++) {
        $temp = ($i == 0) ? '' : $temp;
        if ($str[$i] == ' ') {
            $division[] = strRevCustom($temp);
            $temp = '';
        } else if ($i == $len - 1) {
            $temp .= $str[$i];
            $division[] = strRevCustom($temp);
            $temp = '';
        } else {
            $temp .= $str[$i];
        }
    }

    return implode(' ', $division);
}

function strRevCustom($str)
{
    $len = strlen($str);
    $returnStr = '';
    for ($i = 0; $i < $len; $i++) {
        $returnStr = $str[$i] . $returnStr;
    }
    return $returnStr;
}

echo solution1('Let\'s take LeetCode contest');
echo "<br>";
echo solution2('Let\'s take LeetCode contest');