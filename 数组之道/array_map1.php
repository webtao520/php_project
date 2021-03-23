<?php
// 通过使用 array_map()，你可以对数组中的每个元素执行回调方法。
// 你可以基于给定的数组传入函数名称或匿名函数来获取一个新数组：
/*
$cities = ['Berlin', 'KYIV', 'Amsterdam', 'Riga'];
$aliases = array_map('strtolower', $cities);
print_r($aliases);
*/
/*
$numbers = [1, -2, 3, -4, 5];
$squares = array_map(function ($numbers){
      return  $numbers ** 2;
},$numbers);
print_r($squares);
*/
/*
         Array
                (
                    [0] => 1
                    [1] => 4
                    [2] => 9
                    [3] => 16
                    [4] => 25
                )
 */

$model = ['id' => 7, 'name' => 'James'];
$res  =  array_map(function ($key,$value) {
       return $key . ' is ' . $value;
}, array_keys($model),$model);
print_r($res);
/*
         Array
        (
            [0] => id is 7
            [1] => name is James
        )
 */