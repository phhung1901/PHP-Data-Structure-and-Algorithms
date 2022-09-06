<?php
    $arr = [4, 9, 8, 3, 1, 2, 6, 5, 7, 10];

    function insertionSort($arr){
        for ($i=1; $i < count($arr); $i++) {
            $key = $arr[$i];
            $j = $i-1;

            while ($j >= 0 && $arr[$j] > $key)
            {
                $arr[$j + 1] = $arr[$j];
                $j = $j - 1;
            }

            $arr[$j + 1] = $key;
        }
        print_r($arr);
    }

    insertionSort($arr);