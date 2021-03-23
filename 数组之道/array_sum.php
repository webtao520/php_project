<?php
$numbers = [1, 2, 3, 4, 5];
//print_r(array_sum($numbers)); // 15 对数组元素进行求和运算
//print_r(array_product($numbers)); // 对数组元素执行乘积运算
//print_r(array_reduce($numbers,function ($carry,$item){
//        echo $carry;
//       //return  $carry?$carry/$item:1;
//}));


function myfunction($v1,$v2)
{
    return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction"));