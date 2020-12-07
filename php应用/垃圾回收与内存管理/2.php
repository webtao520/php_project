<?php
$name = 'testdd';
xdebug_debug_zval('name'); // name: (refcount=1, is_ref=0)string 'testdd' (length=9)

$copy = $name;
xdebug_debug_zval('name'); // name: (refcount=2, is_ref=0)string 'testdd' (length=9)

// 将新的值赋值给变量 $copy
$copy = 'testdd handsome';
xdebug_debug_zval('name'); // name: (refcount=1, is_ref=0)string 'testdd' (length=9)
xdebug_debug_zval('copy'); // copy: (refcount=1, is_ref=0)='testdd handsome'