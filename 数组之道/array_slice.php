<?php
$letters = ['a', 'a', 'a', 'a', 'b', 'b', 'c', 'd', 'd', 'd', 'd', 'd'];

$values = array_count_values($letters);
arsort($values); // 保持索引关系进行排序
$top = array_slice($values, 0, 3);

print_r($top);


/*
        Array
            (
                [d] => 5
                [a] => 4
                [b] => 2
                [c] => 1
            )

数组截取

Array
(
    [d] => 5
    [a] => 4
    [b] => 2
)

 */