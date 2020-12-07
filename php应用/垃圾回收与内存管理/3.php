<?php
$sex = 'ggg';
xdebug_debug_zval('sex');

$copy = &$sex;
xdebug_debug_zval('sex');

unset($copy);
xdebug_debug_zval('sex');


/**
    PS D:\phpstudy_pro\www\php_project\php应用\垃圾回收与内存管理> php 3.php
    sex: (interned, is_ref=0)='ggg'
    sex: (refcount=2, is_ref=1)='ggg'
    sex: (refcount=1, is_ref=1)='ggg'
 */