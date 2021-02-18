<?php
/*
    而通过使用 extract() 函数，你可以将关联数组导出到变量（符号表）中。对数组中的各个元素，
    将会以其键名作为变量名创建，变量的值则为对应元素的值：
 */

$array = [
    'clothes' => 't-shirt',
    'size' => 'medium',
    'color' => 'blue',
];
extract($array);
echo $clothes, ' ', $size, ' ', $color; // t-shirt medium blue

