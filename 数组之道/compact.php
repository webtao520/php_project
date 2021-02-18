<?php
// extract() 函数的逆操作是 compact() 函数，用于通过变量名创建关联数组：
$clothes = 't-shirt';
$size = 'medium';
$color = 'blue';

$array = compact('clothes', 'size', 'color');
print_r($array);
/*
     Array
    (
        [clothes] => t-shirt
        [size] => medium
        [color] => blue
    )
 */