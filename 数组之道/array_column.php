<?php
$array = [
['id' => 1, 'title' => 'tree'],
['id' => 2, 'title' => 'sun'],
['id' => 3, 'title' => 'cloud'],
];

$ids=array_column($array,'id');
print_r($ids);

/*
         Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
        )
 */