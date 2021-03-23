<?php
// 数组处理的艺术是组合使用这些数组函数。这里我们通过 array_filter() 和 array_map() 函数仅需一行代码就可以完成空字符截取和去空值处理：
$values = ['say', '  bye', '', ' to', ' spaces  ', '    '];
$val=array_map('trim', $values);
print_r(array_filter($val)); // 删除数组中 array 的所有“空”元素
