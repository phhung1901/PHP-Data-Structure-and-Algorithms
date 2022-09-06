<?php
    $n = 8;
    $arr = [4, 9, 8, 3, 1, 2, 6, 5, 7, 10];

    function linearSearch($n, $arr){
        sort($arr);
        for ($i=0; $i < count($arr); $i++) { 
            if($n == $arr[$i]){
                return "Index: ".$i;
            }
        }
    }


    function binarySearch($n, $arr){
        sort($arr);
        $left = 0;
        $right = count($arr)-1;

        while ($left < $right) {
            // tinh diem giua va lam tron
            $mid = ceil(($right + $left) / 2);

            // check so sanh mid voi n, xac dinh khoang co n
            if ($arr[$mid] == $n) {
                return $mid;
            } elseif ($arr[$mid] > $n) {
                $right = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }
        return -1;
    }

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

    echo binarySearch($n, $arr);
    echo linearSearch($n, $arr);
    echo binarySearchRecursive($n, $arr, 0, count($arr)-1);
?>