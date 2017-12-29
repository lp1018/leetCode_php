<?php
/**
 * Created by letcode.
 * User: lb
 * Date: 2017-12-29 14:15
 * Time: 14:15
 */


/**
 *
 * https://leetcode.com/problems/merge-two-binary-trees/description/
 * Given two binary trees and imagine that when you put one of them to cover the other,
 * some nodes of the two trees are overlapped while the others are not.
 *
 * You need to merge them into a new binary tree.
 * The merge rule is that if two nodes overlap,
 * then sum node values up as the new value of the merged node.
 * Otherwise, the NOT null node will be used as the node of new tree.
 *
 * Example 1:
 * Input:
 * Tree 1                     Tree 2
 *
 *     1                         2
 *    / \                       / \
 *   3   2                     1   3
 *  /                           \   \
 * 5                             4   7
 *
 * Output:
 * Merged tree:
 *     3
 *    / \
 *   4   5
 *  / \   \
 * 5   4   7
 *
 */


/**
 * merge two binary tree
 * @param $tree1
 * @param $tree2
 * @return array merge two binary tree
 */
function solution($tree1, $tree2)
{
    if (empty($tree1)) {
        return $tree2;
    }

    if (empty($tree2)) {
        return $tree1;
    }

    $tree = [
        'data' => $tree1['data'] + $tree2['data'],
        'leftChild' => solution($tree1['leftChild'], $tree2['leftChild']),
        'rightChild' => solution($tree1['rightChild'], $tree2['rightChild'])
    ];

    return $tree;
}

$tree1 = [
    'data' => '1',
    'leftChild' => [
        'data' => 3,
        'leftChild' => [
            'data' => 5,
            'leftChild' => false,
            'rightChild' => false,
        ],
        'rightChild' => false,
    ],
    'rightChild' => [
        'data' => 2,
        'leftChild' => false,
        'rightChild' => false,
    ],
];

$tree2 = [
    'data' => '2',
    'leftChild' => [
        'data' => 1,
        'leftChild' => false,
        'rightChild' => [
            'data' => 4,
            'leftChild' => false,
            'rightChild' => false,
        ],
    ],
    'rightChild' => [
        'data' => 3,
        'leftChild' => false,
        'rightChild' => [
            'data' => 7,
            'leftChild' => false,
            'rightChild' => false,
        ],
    ],
];

function formatBinaryTree($tree, $deep = 1, $rightOffset = 0, $maxDeep = 10)
{
    $data = $tree['data'];

    $leftChild = is_array($tree['leftChild']) ? formatBinaryTree($tree['leftChild'], $deep + 1) : '';
    $rightChild = is_array($tree['rightChild']) ? formatBinaryTree($tree['rightChild'], $deep + 1, $rightOffset + 2) : '';

    $basicsLength = 40;
    $leftOffset = ($maxDeep - $deep + $rightOffset) * $basicsLength;

    //absolute position
    $dataLeft = $leftOffset;
    $dataTop = $deep * $basicsLength;

    if ($leftChild) {
        $leftChildLeft = $dataLeft - $basicsLength / 2;
        $leftChildTop = $dataTop + $basicsLength / 2;
        $leftChild .= <<<leftChild
<span style="display:block;position: absolute;left:{$leftChildLeft};top: {$leftChildTop};">/</span>
leftChild;
    }

    if ($rightChild) {
        $rightChildLeft = $dataLeft + $basicsLength / 2;
        $rightChildTop = $dataTop + $basicsLength / 2;
        $leftChild .= <<<rightChild
<span style="display:block;position: absolute;left:{$rightChildLeft};top: {$rightChildTop};">\</span>
rightChild;
    }

    $return = <<<return
     <span style="display:block;position: absolute;left:{$dataLeft};top: {$dataTop};">{$data}</span> 
  {$leftChild} {$rightChild}
return;


    return $return;
}


print_r(formatBinaryTree(solution($tree1, $tree2)));