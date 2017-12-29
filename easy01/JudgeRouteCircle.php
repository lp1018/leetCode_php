<?php
/**
 * Created by leetcode.
 * User: lb
 * Date: 2017-12-29 13:52
 * Time: 13:52
 */

/**
 *
 * https://leetcode.com/problems/judge-route-circle/description/
 *
 * Initially, there is a Robot at position (0, 0). Given a sequence of its moves,
 * judge if this robot makes a circle, which means it moves back to the original place.
 *
 * The move sequence is represented by a string. And each move is represent by a character.
 * The valid robot moves are R (Right), L (Left), U (Up) and D (down).
 * The output should be true or false representing whether the robot makes a circle.
 *
 * Example 1:
 * Input: "UD"
 * Output: true
 *
 * Example 2:
 * Input: "LL"
 * Output: false
 */


/**
 *
 * @param string $operate Specific operation steps
 * @return boolean is  makes a circle
 */
function solution($operate)
{
    $strLength = strlen($operate);
    $x = $y = 0;

    for ($i = 0; $i < $strLength; $i++) {
        switch ($operate[$i]) {
            case 'R':
                $x++;
                break;
            case 'L':
                $x--;
                break;
            case 'U';
                $y++;
                break;
            case 'D':
                $y--;
                break;
        }
    }

    return ($x == 0 && $y == 0) ? true : false;
}


var_dump(solution("LL"));