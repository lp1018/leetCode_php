<?php
/**
 * Created by PhpStorm.
 * User: lb
 * Date: 2017/12/30 0030
 * Time: 18:30
 */

/**
 * @param $array
 * @return array sorted array
 */
function quickSort($array)
{
    $len = count($array);
    if ($len <= 1) {
        return $array;
    }

    //compare data
    $base = $array[0];

    $left = $right = [];
    for ($i = 1; $i < $len; $i++) {
        if ($array[$i] < $base) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }

    $left = quickSort($left);
    $right = quickSort($right);

    return array_merge($left, (array)$base, $right);
}

print_r(quickSort([1, 3, 2, 5, 634, 23, 12, 23, 12]));

