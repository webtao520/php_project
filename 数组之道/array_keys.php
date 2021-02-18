<?php
// array_keys() 则会返回给定数组的键名
$keys = ['sky', 'grass', 'orange'];
$values = ['blue', 'green', 'orange'];
$array=array_combine($keys,$values);
/*
     Array
    (
        [sky] => blue
        [grass] => green
        [orange] => orange
    )
 */
print_r(array_keys($array)); // 返回给定数组的键名
print_r(array_values($array)); // 以索引数组形式返回数组中的值
print_r(array_flip($array)); //  交换数组中的键值和键名

