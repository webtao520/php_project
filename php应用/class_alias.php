<?php
// class_alias — 为一个类创建别名
// class_alias ( string $original , string $alias , bool $autoload = true ) : bool
/*
参数
    original
    原有的类。

    alias
    类的别名。

    autoload
    如果原始类没有加载，是否使用自动加载（autoload）

返回值
        成功时返回 true， 或者在失败时返回 false。
 */

class   foo {}

class_alias('foo','bar');

$a = new foo;
$b = new bar;

var_dump($a == $b, $a === $b);
var_dump($a instanceof $b);
var_dump($a instanceof   foo);
var_dump($a instanceof bar);
var_dump($b instanceof   foo);
var_dump($b instanceof bar);