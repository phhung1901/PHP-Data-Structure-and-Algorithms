<?php
    $arr = [4, 9, 8, 3, 1, 2, 6, 5, 7, 10];

    function selectionSort($arr){
        for ($i=0; $i < count($arr); $i++) {
            $min = $i;
            for ($j=$i + 1; $j < count($arr); $j++) {
                if ($arr[$j] < $arr[$min]) {
                    $min = $j;
                }
            }

            // swap
            $t = $arr[$i];
            $arr[$i] = $arr[$min];
            $arr[$min] = $t;
        }
        print_r($arr);
    }

    selectionSort($arr);