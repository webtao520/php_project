<?php
// @link http://php.net/manual/zh/function.memory-get-usage.php#96280
function convert($size)
{
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}

// 注意：有用的地方从这里开始
$memory = memory_get_usage();

$a = array( 'one' );

// 引用自身（循环引用）
$a[] =&$a;
print_r($a);

//xdebug_debug_zval( 'a' );

//var_dump(convert(memory_get_usage() - $memory)); // 296 b

//unset($a); // 删除变量 $a，由于 $a 中的元素引用了自身（循环引用）最终导致 $a 所使用的内存无法被回收

//var_dump(convert(memory_get_usage() - $memory)); // 568 b