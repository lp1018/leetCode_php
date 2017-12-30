<?php
/**
 * Created by xunchou.lee
 * User: lb
 * Date: 2017-12-29 11:00
 * Time: 11:00
 */

/**
 *
 * https://leetcode.com/problems/two-sum/description/
 *
 * Problem
 * Given an array of integers, return indices of the two numbers such that they add up to a specific target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 *
 * Example:
 * Given nums = [2, 7, 11, 15], target = 9,
 * Because nums[0] + nums[1] = 2 + 7 = 9,
 * return [0, 1]
 */

/**
 * Brute Force
 * Time complexity : O(n²).
 * @param array $array original data
 * @param int $target target num
 * @return array $result coincident result
 */
function twoSum($array, $target)
{
    $result = [];
    $count = count($array);
    foreach ($array as $key => $value) {
        for ($i = $key + 1; $i < $count; $i++) {
            if ($target == $array[$key] + $array[$i]) {
                return [$array[$key], $array[$i]];
            }
        }
    }
    return $result;
}

/**
 * Hash Table
 * Time complexity : O(n).
 * @param array $array original data
 * @param int $target target num
 * @return array $result coincident result
 */
function twoSum2($array, $target)
{
    foreach ($array as $key => $value) {
        $hashTable[$value] = $key;
    }
    foreach ($array as $key => $value) {
        $complement = $target - $value;
        if ($hashTable[$complement]) {
            return [$value, $hashTable[$complement]];
        }
    }
    echo 'no result';
}

echo "Brute Force : <br>";
echo "Time complexity : O(n²). <br>";
print_r(twoSum([2, 7, 11, 15], 9));

echo "<br>";
echo "<br>";

echo "Hash table : <br>";
echo "Time complexity : O(n). <br>";
print_r(twoSum([2, 7, 11, 15], 9));
