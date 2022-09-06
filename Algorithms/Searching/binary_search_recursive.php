<?php
    $n = 8;
    $arr = [4, 9, 8, 3, 1, 2, 6, 5, 7, 10];

    function binarySearchRecursive($n, $arr, $left, $right){
        sort($arr);
        $mid = ceil(($left + $right)/2);

        if ($arr[$mid] == $n){
            return $mid;
        }elseif ($arr[$mid] > $n){
            return binarySearchRecursive($n, $arr, $left, $mid - 1);
        }else{
            return binarySearchRecursive($n, $arr, $mid + 1, $right);
        }
        return -1;
    }

    echo binarySearchRecursive($n, $arr, 0, count($arr)-1);
