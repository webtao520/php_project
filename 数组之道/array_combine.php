<?php
//    array_combine    处理数据的键名和键值的基础数组函数开始
//    用于通过使用一个数组的值作为其键名，另一个数组的值作为其值来创建一个全新数组：
$keys = ['sky', 'grass', 'orange'];
$values = ['blue', 'green', 'orange'];
$array=array_combine($keys,$values);
print_r($array);


/*
     Array
        (
            [sky] => blue
            [grass] => green
            [orange] => orange
        )
 */
