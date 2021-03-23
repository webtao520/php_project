<?php
$array1= [1,2,3,4];
$array2=[3,4,5,6];
$diff = array_diff($array2,$array1); //  差集  两个数组不同部分
$intersect = array_intersect($array1,$array2); // 交集  两个数组相同的部分
print_r($intersect);
