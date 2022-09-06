<?php
    $arr = [4, 9, 8, 3, 1, 2, 6, 5, 7, 10];

    function bubleSort($arr){
        for($i = 0; $i < count($arr); $i++)
        {
            for ($j = 0; $j < count($arr) - $i - 1; $j++)
            {
                // check and swap
                if ($arr[$j] > $arr[$j+1])
                {
                    $t = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $t;
                }
            }
        }
        print_r($arr);
    }

    bubleSort($arr);