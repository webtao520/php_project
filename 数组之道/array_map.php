<?php
// array_map — 为数组的每个元素应用回调函数

// array_map ( callable $callback , array $array , array ...$arrays ) : array

/*
function show_Spanish($n, $m)
{
    return "The number {$n} is called {$m} in Spanish";
}

function map_Spanish($n, $m)
{
    return [$n => $m];
}

$a = [1, 2, 3, 4, 5];
$b = ['a', 'b', 'c', 'd', 'e'];

$c = array_map('show_Spanish', $a, $b);
print_r($c);

$d = array_map('map_Spanish', $a , $b);
print_r($d);
*/


/*
$array = [1, 2, 3];
var_dump(array_map(null, $array));
*/

$arr = array("stringkey" => "value");

function cb1($a){
    return [$a];
}

print_r(array_map('cb1',$arr));









