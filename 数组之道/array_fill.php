<?php

// 需要以给定值生成固定长度的数组，可以使用 array_fill() 函数：
//$bind = array_fill(0,5,"?");
//print_r($bind);

//根据范围创建数组，如小时或字母，可以使用 range() 函数：
//$letters =range ('a','z');
//print_r($letters);

//$hours = range(0, 23);
//print_r($hours); // [0, 1, 2, ..., 23]

// 为了实现获取数组中的部分元素 - 比如，获取前三个元素 - 使用 array_slice() 函数:
$numbers =range(1,10);
$top =array_slice($numbers,0,3);
print_r($top);