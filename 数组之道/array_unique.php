<?php
// array_unique() 函数用于从数组中获取唯一值元素。注意该函数会保留唯一元素在原数组中的键名：
$array = [1, 1, 1, 1, 2, 2, 2, 3, 4, 5, 5];
$uniques=array_unique($array);
print_r($uniques);
print_r($array);

/*
         Array
        (
            [0] => 1
            [4] => 2
            [7] => 3
            [8] => 4
            [9] => 5
        )
 */
