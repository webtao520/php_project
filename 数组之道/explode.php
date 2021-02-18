<?php
/*
$string = 'hello|wild|world';
list($hello,$wild,$world)= explode('|',$string);
print_r( explode('|',$string));
echo $hello." ".$wild.' '.$world;
*/

$arrays = [[1,2],[3,4],[5,6]];
// 另外，list() 还可用于 foreach 遍历，这种用法更能发挥这个语言结构的优势：
foreach ($arrays as list($a,$b)){
        $c = $a + $b;
        echo $a." ".$b."|";
        echo $c,', '; // 3, 7, 11,
}