<?php
//在 PHP 中合并数组的最佳方式是使用 array_merge() 函数。所有的数组选项会合并到一个数组中，具有相同键名的值会被最后一个值所覆盖：
$array1 = ['a' => 'a', 'b' => 'b', 'c' => 'c'];
$array2 = ['a' => 'A', 'b' => 'B', 'D' => 'D'];

$merge = array_merge($array1, $array2);
print_r($merge);