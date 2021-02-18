<?php
/*
     PHP 提供一个用于过滤数组的超赞的函数，它是 array_filter()。
     将待处理数组作为函数的第一个参数，第二个参数是一个匿名函数。
     如果你希望数组中的元素通过验证则在匿名函数返回 true，否则返回 false：
 */
/*
$numbers = [20,-3,50,-99,55];

$postitive = array_filter($numbers,function ($numbers){
       return $numbers  > 0;
});
print_r($postitive);
*/
/*
  Array
(
    [0] => 20
    [2] => 50
    [4] => 55
)
 */

$number = [-1,0,1];
$not_empty=array_filter($number); //  不定义回调函数以删除空值
print_r($not_empty);

