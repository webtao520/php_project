<?php
/**
 *  php 回调函数结合闭包(匿名函数)的使用
 */
function callback($callback){
    $variable="program";
    $ret1=$callback($variable);
    return $ret1; //返回到$ret2
}




$var ='字符串';

/**
 *  闭包的一个重要概念，就是内部函数中可以使用外部变量，通过关键字use 才能实现use 引用的变量是$var 的副本，
 *  如果要完全引用，变量前加上"&"取地址符号
 */
$ret2=callback(function ($param) use (&$var){
    return "闭包函数测试 {$param} -> {$var}";  //返回到$ret1
});

echo $ret2;  //显示结果：闭包函数测试 program -> 字符串
