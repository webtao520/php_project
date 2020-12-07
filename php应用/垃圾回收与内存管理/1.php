<?php
// 变量赋值时，refcount 值等于 1
$a = 'GGG';
xdebug_debug_zval('a'); // (refcount=1, is_ref=0)string 'GGG' (length=9)

// $name 作为值赋值给另一个变量， refcount 值增加 1
$copy = $a;
xdebug_debug_zval('a'); // (refcount=2, is_ref=0)string 'GGG' (length=9)

// 销毁变量，refcount 值减掉 1
unset($copy);
xdebug_debug_zval('a'); // (refcount=1, is_ref=0)string 'GGG' (length=9)