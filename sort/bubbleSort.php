<?php
/**
 * Created by PhpStorm.
 * User: lb
 * Date: 2017/12/30 0030
 * Time: 18:48
 */


/**
 * Time complexity O(n2)
 * best Time Complexity  O（n）
 * @param $array
 * @return array
 */
function bubbleSortDesc($array)
{
    $len = count($array);

    for ($i = 0; $i < $len - 1; $i++) {
        $flag = true;
        for ($j = 0; $j < $len - 1 - $i; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
                $flag = false;
            }
        }
        if ($flag == true) return $array;
    }

    return $array;
}

/**
 * @param $array
 * @return array
 */
function bubbleSortAsc($array)
{
    $len = count($array);

    for ($i = 0; $i < $len - 1; $i++) {
        $flag = true;
        for ($j = 0; $j < $len - 1 - $i; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
                $flag = false;
            }
        }
        if ($flag == true) return $array;
    }

    return $array;
}


print_r(bubbleSortDesc([1, 3, 2, 5, 634, 23, 12, 23, 12]));
print_r(bubbleSortAsc([1, 3, 2, 5, 634, 23, 12, 23, 12]));