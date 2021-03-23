<?php

// 第一，数组是以引用传值方式传入，所以 array_walk() 不会创建新数组，而是直接修改原数组。
// 所以作为源数组，你可以将数组的值以引用传递方法传入回调函数，数组的键名直接传入就好了：
$fruits = [
    'banana' => 'yellow',
    'apple' => 'green',
    'orange' => 'orange',
];

array_walk($fruits,function (&$value,$key){
        $value = $key . ' is '. $value;
});

print_r($fruits);

