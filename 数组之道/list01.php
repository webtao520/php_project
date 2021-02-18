<?php
// list 函数 确切的说它不是一个函数，而是一个语言结构，可以在单次操作中将数值中的值赋值给一组变量
// 定义数组
$array=['a','b','c'];
// 不使用list()
$a = $array[0];
$b= $array[1];
$c=$array[2];

// 使用 list() 函数
list($a,$b,$c)=$array;

print_r($a); // a
print_r($b);